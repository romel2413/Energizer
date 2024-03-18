<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .font_size {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color {
            color: black;
            padding-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .div_design {
            padding-bottom: 15px;

        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="div_center">

                        <h1 class="font_size">Update Product</h1>

                        <form action="{{ url('/update_user',$user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="div_design">
                                <label for="">NAME :</label>
                                <input class="text_color" type="text" name="name" id=""
                                    placeholder="Write a Name " required="" value="{{ $user->name }}">
                            </div>

                            <div class="div_design">
                                <label for="">EMAIL :</label>
                                <input class="text_color" type="text" name="email" id=""
                                    placeholder="Write a Email " required="" value="{{ $user->email }}">
                            </div>

                            <div class="div_design">
                                <label for="usertype">USERTYPE:</label>
                                <select class="text_color" name="usertype" id="usertype" required>
                                    <option value="0" {{ $user->usertype === 0 ? 'selected' : '' }}>User</option>
                                    <option value="1" {{ $user->usertype === 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="2" {{ $user->usertype === 0 ? 'selected' : '' }}>Cashier</option>
                                </select>
                            </div>
                            <div class="div_design">
                                <label for="verified">Verified:</label>
                                <select class="text_color" name="verified" id="verified" required>
                                    <option value="1" {{ $user->email_verified_at ? 'selected' : '' }}>Verified</option>
                                    <option value="0" {{ !$user->email_verified_at ? 'selected' : '' }}>Not Verified</option>
                                </select>
                            </div>

                            <div class="div_design">
                                <label for="">PHONE :</label>
                                <input class="text_color" type="number" min="1" name="phone" id=""
                                    placeholder="Write a Price " required="" value="{{ $user->phone }}">
                            </div>

                            <div class="div_design">
                                <label for="">ADDRESS :</label>
                                <input class="text_color" type="text" min="0" name="address" id=""
                                    placeholder="Write a Quantity " required="" value="{{ $user->address }}">
                            </div>

                            <div>
                                <input type="submit" value="Update User" class="btn btn-primary" required="">
                            </div>


                        </form>

                    </div>
                </div>
                @include('admin.footer')
            </div>

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    @include('admin.js')
</body>

</html>
