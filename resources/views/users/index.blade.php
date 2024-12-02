@extends('layouts.dashboard')

@section('page-title', 'Manage User')

@section('content')
    <!-- Filter User start -->
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Control starts -->
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-12">
                        <h5 class="card-header-text">Filter</h5>
                    </div>
                </div>

                <div class="card-block">
                    <form>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleRole" class="form-control-label">Role</label>
                                <select class="form-control" id="exampleRole" name="">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleStatus" class="form-control-label">Status</label>
                                <select class="form-control" id="exampleStatus" name="">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Form Control ends -->
        </div>
    </div>
    <!-- Filter User end -->
    <!-- User table starts -->
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=""
                href="/add-user" role="button" data-original-title="Add User">
                <i class="ti-plus"></i> Add User
            </a>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table-hover table">
                        <thead>
                            <tr>
                                <th style="width: 1%;">#</th>
                                <th style="width: 20%;">Fullname</th>
                                <th style="width: 20%;">Email</th>
                                <th style="width: 12%;">Role</th>
                                <th style="width: 20%;">Registration Date</th>
                                <th style="width: 7%;">Status</th>
                                <th class="text-center" style="width: 20%; ">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Prisalindut</td>
                                <td>prisandut@gmail.com</td>
                                <td>Admin</td>
                                <td>3 Des 2024</td>
                                <td>Active</td>
                                <td class="text-center">
                                    <a class="btn btn-warning waves-effect waves-light" data-toggle="tooltip"
                                        data-placement="top" title="" href="/edit-user" role="button"
                                        data-original-title="edit ">
                                        <i class="ti-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger waves-effect waves-light" data-toggle="tooltip"
                                        data-placement="top" title="" href="#" role="button"
                                        data-original-title="delete ">
                                        <i class="ti-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- User table ends -->
@endsection
