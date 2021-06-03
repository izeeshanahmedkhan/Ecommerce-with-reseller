@extends('admin.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'resellerIndex', $title = 'Resellers - Nafia Garments'}}">
    <div class="main-content">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>View All Resellers</h4>
            </div>
        </div>
        <!-- end of row-->
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3" style="display: inline;">Reseller</h4>
                        @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('create resellers'))
                        <div style="float:right; margin-right: 1%;">
                            <a href="{{route('reseller.create')}}" class="btn btn-raised btn-raised-primary m-1" style="color: white;"><i
                                    class="nav-icon font-weight-bold"></i>Add New Resellers</a>
                            <br> <br>
                        </div>
                        @endif

                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>City</th>
                                    <th>Cnic Image</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($resellers as $reseller)
                                    <tr>
                                        <td>{{$reseller->id}}</td>
                                        <td>{{$reseller->name}}</td>
                                        <td>{{$reseller->contact}}</td>
                                        <td>{{$reseller->city}}</td>
                                        <td>
                                            <div style="width:75px; height: 75px; font-size: 0;">
                                                <img src="{{ asset('storage/images/resellerImages/'.$reseller->cnic_front) }}" alt="cnic image not found" />
                                            </div>

                                        </td>
                                        <td>{{$reseller->status == '1' ? 'Active':'InActive'}}</td>
                                        <td>{{$reseller->created_at->diffForHumans()}}</td>
                                        <td>
                                            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('edit resellers'))
                                            <a href="{{route('reseller.edit',$reseller)}}" class="btn btn-raised btn-raised-primary m-1" style="color: white"><i
                                                    class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                            @endif
                                            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('delete resellers'))
                                            <form method="POST" action="{{route('reseller.destroy',$reseller)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-raised btn-raised-danger m-1" style="color: white"><i
                                                        class="nav-icon i-Close-Window font-weight-bold"></i></button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Contact No</th>
                                    <th>City</th>
                                    <th>Cnic Image</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('page_css')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>--}}
    <link rel="stylesheet" href="{{asset('admin-assets/css/plugins/toastr.css')}}" />
    <link rel="stylesheet" href="{{asset('admin-assets/css/plugins/datatables.min.css')}}" />
@endsection
@section('page_script')
    <script src="{{ asset('admin-assets/js/plugins/toastr.min.js') }}"></script>
{{--    <script src="{{asset('admin/js/scripts/toastr.script.min.js')}}"></script>--}}
   {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">--}}
    {{--    <script src="{{asset('admin/js/plugins/toastr.min.js')}}"></script>--}}
    {{--    <script src="{{asset('admin/js/scripts/toastr.script.min.js')}}"></script>--}}
    <script src="{{asset('admin-assets/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts/datatables.script.min.js')}}"></script>
@endsection
