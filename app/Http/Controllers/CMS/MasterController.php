<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Product;
use Intervention\Image\ImageManagerStatic;
use App\Models\Config;
use App\Models\Role;
use App\Models\RoleUsers;
use App\Models\User;

class MasterController extends Controller
{

    // Start Crud Product
    function indexProduct(Request $request)
    {
        if (request()->ajax()) {
            $product = Product::where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->get();

            return DataTables()->of($product)
            ->addIndexColumn()
            ->addColumn('action', function($product){
                return '<a href="#" class="btn btn-icon icon-left btn-info" id="button_edit" data-id="'.$product->id.'" data-toggle="modal" data-target="#editProduct"><i class="fas fa-edit"></i> Edit</a>'.
                ' <a href="#" id="button_delete" data-id="'.$product->id.'" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Hapus</a>';
            })
                ->addColumn('created_at', function($product){
                       return Carbon::parse($product->created_at)->isoFormat('dddd, D MMMM Y');
                })
                ->addColumn('image', function($product){
                       return '<figure class="avatar mr-2 avatar-xl"><img src="'.url('property/product/', base64_decode($product->image)).'" alt="..."></figure>';
                })

                ->addColumn('price', function($product){
                    return 'Rp. '.number_format($product->price, 0, ',', '.').'';
                })
                ->addColumn('description', function($product){
                    return html_entity_decode($product->description);
                })


                ->rawColumns(['created_at', 'image', 'price', 'action', 'description'])
                ->make(true);
        }

        return view('cms.page.masterData.product.index');
    }

    function editProduct($productId)
    {
        $product = Product::whereId($productId)->first();
        return response()->json(['image' => base64_decode($product->image), 'data' => $product]);
    }

    function createOrUpdateProduct(Request $request)
    {
        if (!empty($request->id)) {
                $product               = Product::whereId($request->id)->first();
                $product->name         = $request->name;
                $product->price        = str_replace(".", "", $request->price);
                $product->description  = $request->description;
                $product->save();


                if ($request->hasFile('image')) {

                    $file = $request->file('image');

                    $image = ImageManagerStatic::make($file);
                    $name = $file->getClientOriginalName();
                    //  Thumbnail
                    $upload_img = $image->resize(null, 900, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $upload_img->save(public_path("property/product/thumbnail/{$name}"), 80, 'png');

                    $file->move('property/product/',$name);


                     $product->update([
                         'image' => base64_encode($name)
                     ]);
                 }

                if ($product) {
                    return response()->json(['status' => 1], 201);
                //  Berhasil Menambah
                } else {
                    return response()->json(['status' => 2], 203);
                //  Gagal Menambah
                }
        } else {
            $cek = Product::whereName($request->name)
            ->where('status', '1')->count();

            if ($cek < 1) {
                 $product = Product::create([
                    'name'          => $request->name,
                    'price'         => str_replace(".", "", $request->price),
                    'description'   => $request->description,
                    'status'        => 1
                 ]);

                 if ($request->hasFile('image')) {

                    $file = $request->file('image');

                    $image = ImageManagerStatic::make($file);
                    $name = $file->getClientOriginalName();
                    //  Thumbnail
                    $upload_img = $image->resize(null, 900, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $upload_img->save(public_path("property/product/thumbnail/{$name}"), 80, 'png');

                    $file->move('property/product/',$name);


                     $product->update([
                         'image' => base64_encode($name)
                     ]);
                 }

                 if ($product) {
                     return response()->json(['status' => 1], 201);
                    //  Berhasil Menambah
                 } else {
                     return response()->json(['status' => 2], 203);
                    //  Gagal Menambah
                 }
            } else {
                return response()->json(['status' => 3], 203);
                // Produk Tersedia
            }

        }
    }

    function deleteProduct($productId)
    {
        $product = Product::whereId($productId)->first();
        $product->status = 0;
        $product->save();

        if ($product) {
            return response()->json(['status' => 1], 201);
        } else {
            return response()->json(['status' => 2], 202);
        }
    }

    // End Crud Product


    //  Start Crud Material
    function indexMaterial(Request $request)
    {
        if (request()->ajax()) {
            $material = Material::where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->get();

            return DataTables()->of($material)
            ->addIndexColumn()
            ->addColumn('action', function($material){
                return '<a href="#" class="btn btn-icon icon-left btn-info" id="button_edit" data-id="'.$material->id.'" data-toggle="modal" data-target="#editMaterial"><i class="fas fa-edit"></i> Edit</a>'.
                ' <a href="#" id="button_delete" data-id="'.$material->id.'" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Hapus</a>';
            })
                ->addColumn('created_at', function($material){
                       return Carbon::parse($material->created_at)->isoFormat('dddd, D MMMM Y');
                })
                ->addColumn('image', function($material){
                       return '<figure class="avatar mr-2 avatar-xl"><img src="'.url('property/material/', base64_decode($material->image)).'" alt="..."></figure>';
                })

                ->addColumn('price', function($material){
                    return 'Rp. '.number_format($material->price, 0, ',', '.').'';
                })


                ->rawColumns(['created_at', 'image', 'price', 'action'])
                ->make(true);
        }

        return view('cms.page.masterData.material.index');
    }

    function editMaterial($materialId)
    {
        $material = Material::whereId($materialId)->first();
        return response()->json(['image' => base64_decode($material->image), 'data' => $material]);
    }

    function createOrUpdateMaterial(Request $request)
    {
        if (!empty($request->id)) {
                $material               = Material::whereId($request->id)->first();
                $material->name         = $request->name;
                $material->price        = str_replace(".", "", $request->price);
                $material->thickness    = $request->thickness;
                $material->size         = $request->size;
                $material->save();


                if ($request->hasFile('image')) {

                    $file = $request->file('image');

                    $image = ImageManagerStatic::make($file);
                    $name = $file->getClientOriginalName();
                    //  Thumbnail
                    $upload_img = $image->resize(null, 900, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $upload_img->save(public_path("property/material/thumbnail/{$name}"), 80, 'png');

                    $file->move('property/material/',$name);


                     $material->update([
                         'image' => base64_encode($name)
                     ]);
                 }

                if ($material) {
                    return response()->json(['status' => 1], 201);
                //  Berhasil Menambah
                } else {
                    return response()->json(['status' => 2], 203);
                //  Gagal Menambah
                }
        } else {
            $cek = Material::whereName($request->name)
            ->where('status', '1')->count();

            if ($cek < 1) {
                 $material = Material::create([
                    'name'          => $request->name,
                    'price'         => str_replace(".", "", $request->price),
                    'thickness'     => $request->thickness,
                    'size'          => $request->size,
                    'status'        => '1'
                 ]);

                 if ($request->hasFile('image')) {

                    $file = $request->file('image');

                    $image = ImageManagerStatic::make($file);
                    $name = $file->getClientOriginalName();
                    //  Thumbnail
                    $upload_img = $image->resize(null, 900, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                    $upload_img->save(public_path("property/material/thumbnail/{$name}"), 80, 'png');

                    $file->move('property/material/',$name);


                     $material->update([
                         'image' => base64_encode($name)
                     ]);
                 }

                 if ($material) {
                     return response()->json(['status' => 1], 201);
                    //  Berhasil Menambah
                 } else {
                     return response()->json(['status' => 2], 203);
                    //  Gagal Menambah
                 }
            } else {
                return response()->json(['status' => 3], 203);
                // Produk Tersedia
            }

        }
    }

    function deleteMaterial($materialId)
    {
        $material = Material::whereId($materialId)->first();
        $material->status = '0';
        $material->save();

        if ($material) {
            return response()->json(['status' => 1], 201);
        } else {
            return response()->json(['status' => 2], 202);
        }
    }

    // End Crud Material


    // Start Crud Config
    function indexConfig(Request $request)
    {
        if (request()->ajax()) {
            $config = Config::where('status', '1')
            ->orderBy('created_at', 'DESC')
            ->get();

            return DataTables()->of($config)
            ->addIndexColumn()
            ->addColumn('action', function($config){
                return '<a href="#" class="btn btn-icon icon-left btn-info" id="button_edit" data-id="'.$config->id.'" data-toggle="modal" data-target="#editConfig"><i class="fas fa-edit"></i> Edit</a>'.
                ' <a href="#" id="button_delete" data-id="'.$config->id.'" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Hapus</a>';
            })
                ->addColumn('created_at', function($config){
                       return Carbon::parse($config->created_at)->isoFormat('dddd, D MMMM Y');
                })
                ->addColumn('logo', function($config){
                       return '<figure class="avatar mr-2 avatar-xl"><img src="'.url('property/config/logo/', base64_decode($config->logo)).'" alt="..."></figure>';
                })
                ->addColumn('banner', function($config){
                       return '<figure class="avatar mr-2 avatar-xl"><img src="'.url('property/config/banner/', base64_decode($config->banner)).'" alt="..."></figure>';
                })



                ->rawColumns(['created_at', 'logo', 'banner', 'action'])
                ->make(true);
        }

        return view('cms.page.masterData.config.index');
    }

    function editConfig($configId)
    {
        $config = Config::whereId($configId)->first();
        return response()->json(['banner' => base64_decode($config->banner), 'logo' => base64_decode($config->logo), 'data' => $config]);
    }

    function createOrUpdateConfig(Request $request)
    {
        if (!empty($request->id)) {
                $config               = Config::whereId($request->id)->first();

                $banner = $request->file('banner');
                $logo = $request->file('logo');


                $image = ImageManagerStatic::make($banner);
                $name = $banner->getClientOriginalName();
                //  Thumbnail
                $upload_img = $image->resize(null, 900, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $upload_img->save(public_path("property/config/banner/thumbnail/{$name}"), 80, 'png');

                $banner->move('property/config/banner/',$name);


                // Logo


                $image_logo = ImageManagerStatic::make($logo);
                $name_logo = $logo->getClientOriginalName();
                //  Thumbnail
                $upload_img_logo = $image_logo->resize(null, 900, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $upload_img_logo->save(public_path("property/config/logo/thumbnail/{$name_logo}"), 80, 'png');

                $logo->move('property/config/logo/',$name_logo);


                $config->update([
                    'banner'     => base64_encode($name),
                    'logo'       => base64_encode($name_logo),
                ]);

                if ($config) {
                    return response()->json(['status' => 1], 201);
                //  Berhasil Menambah
                } else {
                    return response()->json(['status' => 2], 203);
                //  Gagal Menambah
                }
        } else {
            $banner = $request->file('banner');
            $logo = $request->file('logo');


            $image = ImageManagerStatic::make($banner);
            $name = $banner->getClientOriginalName();
            //  Thumbnail
            $upload_img = $image->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });
            $upload_img->save(public_path("property/config/banner/thumbnail/{$name}"), 80, 'png');

            $banner->move('property/config/banner/',$name);


            // Logo


            $image_logo = ImageManagerStatic::make($logo);
            $name_logo = $logo->getClientOriginalName();
            //  Thumbnail
            $upload_img_logo = $image_logo->resize(null, 900, function ($constraint) {
                $constraint->aspectRatio();
            });

            $upload_img_logo->save(public_path("property/config/logo/thumbnail/{$name_logo}"), 80, 'png');

            $logo->move('property/config/logo/',$name_logo);


            $config = Config::create([
                'banner'     => base64_encode($name),
                'logo'       => base64_encode($name_logo),
                'status'     => '1'
            ]);

            if ($config) {
                return response()->json(['status' => 1], 201);
            //  Berhasil Menambah
            } else {
                return response()->json(['status' => 2], 203);
            //  Gagal Menambah
            }

        }
    }

    function deleteConfig($configId)
    {
        $config = Config::whereId($configId)->first();
        $config->status = '0';
        $config->save();

        if ($config) {
            return response()->json(['status' => 1], 201);
        } else {
            return response()->json(['status' => 2], 202);
        }
    }

    // End Crud Config

    // Start Crud Users
    function indexUsers(Request $request)
    {
        if (request()->ajax()) {
            $users = RoleUsers::join('users', 'role_users.user_id', '=', 'users.id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->select(
                'users.*',
                'users.id as id_user',
                'roles.*',
                'roles.name as role',
                'users.name as name_user'
            )
            ->get();

            return DataTables()->of($users)
            ->addIndexColumn()
            ->addColumn('action', function($users){
                return '<a href="#" class="btn btn-icon icon-left btn-info" id="button_edit" data-id="'.$users->id_user.'" data-toggle="modal" data-target="#editUser"><i class="fas fa-edit"></i> Edit</a>'.
                ' <a href="#" id="button_delete" data-id="'.$users->id_user.'" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Hapus</a>';
            })
                ->addColumn('created_at', function($users){
                       return Carbon::parse($users->created_at)->isoFormat('dddd, D MMMM Y');
                })

                ->rawColumns(['created_at','action'])
                ->make(true);
        }

        return view('cms.page.masterData.user.index');
    }

    function editUsers($usersId)
    {
        $users = User::whereId($usersId)->first();
        return response()->json($users);
    }

    function createOrUpdateUsers(Request $request)
    {
        if (!empty($request->id)) {
            $users = User::whereId($request->id)->first();
            $users->name = $request->name;
            $users->email = $request->email;
            $users->save();

            $role_users = RoleUsers::whereUserId($request->id)->first();
            $role_users->user_id = $request->user_id;
            $role_users->role_id = $request->role_id;

            if ($role_users && $users) {
                return response()->json(['status' => 1], 201);
            } else {
                return response()->json(['status' => 2], 202);
            }
        } else {
            $count = User::whereEmail($request->email)->count();
            if($count > 1 ) {
                return response()->json(['status' => 3], 201);
                // Email Sudah Digunakan
            }

            $users = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            if ($users) {
                $role_users = RoleUsers::create([
                    'user_id' => $users->id,
                    'role_id' => $request->role_id
                ]);

                if ($role_users && $users) {
                    return response()->json(['status' => 1], 201);
                } else {
                    return response()->json(['status' => 2], 202);
                }
            }
        }
    }

    function deleteUsers($usersId)
    {

        $role_users = RoleUsers::whereUserId($usersId)->first();
        if ($role_users->role_id != 1) {

            $users = User::whereId($usersId)->first();
            $users->delete();
            if ($users) {
                return response()->json(['status' => 1], 201);
                // Berhasil Menghapus Users
            } else {
                return response()->json(['status' => 2], 201);
                // Gagal menghapus user
            }
        } else {
            return response()->json(['status' => 3], 203);
            // Admin Tidak Bisa dihapus
        }
    }

    // End Crud Users


    // Start Crud Role
    function indexRole(Request $request)
    {
        if (request()->ajax()) {
            $role = Role::latest()->get();

            return DataTables()->of($role)
            ->addIndexColumn()
            ->addColumn('action', function($role){
                return '<a href="#" class="btn btn-icon icon-left btn-info" id="button_edit" data-id="'.$role->id.'" data-toggle="modal" data-target="#editRole"><i class="fas fa-edit"></i> Edit</a>'.
                ' <a href="#" id="button_delete" data-id="'.$role->id.'" class="btn btn-icon icon-left btn-danger"><i class="fas fa-trash"></i> Hapus</a>';
            })
                ->addColumn('created_at', function($role){
                       return Carbon::parse($role->created_at)->isoFormat('dddd, D MMMM Y');
                })

                ->rawColumns(['created_at','action'])
                ->make(true);
        }
    }

    function editRole($roleId)
    {

        $role = Role::whereId($roleId)->first();
        return response()->json($role);
    }

    function createOrUpdateRole(Request $request)
    {
        if ($request->id) {
            $count = Role::whereName($request->name)->count();

            if ($count > 1) {
                return response()->json(['status' => 3], 201);
                    // Role Sudah Tersedia
            }

            $role = Role::whereId($request->id)->first();
            $role->name = $request->name;
            $role->save();


            if ($role) {
                return response()->json(['status' => 1], 201);
            } else {
                return response()->json(['status' => 2], 202);
            }
        }

        $count = Role::whereName($request->name)->count();
        if ($count > 1) {
            return response()->json(['status' => 3], 201);
            // Role Sudah Tersedia
        }

        $role = new Role;
        $role->name = $request->name;
        $role->save();

        if ($role) {
            return response()->json(['status' => 1], 201);
        } else {
            return response()->json(['status' => 2], 202);
        }
    }

    function deleteRole($roleId)
    {
        $role_users = RoleUsers::where($roleId)->count();
        if ($role_users == 1)
        {
            return response()->json(['status' => 3], 201);
            // Role Ini Tidak bisa dihapus
        }

        $role = Role::whereId($roleId)->first();
        $role->delete();

        if ($role) {
            return response()->json(['status' => 1], 201);
        } else {
            return response()->json(['status' => 2], 201);
        }
    }

    // End Crud Role






}
