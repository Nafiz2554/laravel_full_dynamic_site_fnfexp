@extends('frontend.layouts.base')
@section('main-container')
    <div class="container overflow-auto">
        <h3 class="text-center p-2"> PARCEL TRACKING</h3>
        <div class="container">

            <form class="d-flex flex-row" action="{{ url('/parcel-track') }}" method="GET">
                @csrf
                <input type="search" id="ref_no" class="form-control form-control-sm" name="search"
                    value="{{ $search }}" placeholder="Type tracking number">
                <div class="input-group-append">
                    <button type="submit" id="track-btn" class="btn btn-sm btn-dark btn-gradient-primary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form> <br>

            <table class="table-dark table-sm text-break table-striped">
                <thead>
                    <tr>
                        <th scope="col">Parcel_ID</th>
                        <th scope="col">Status</th>
                        <th scope="col">Updating_Time</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($parcel as $parcels)
                        <tr>
                            <td>{{ $parcels->parcel_id }}</td>
                            @php
                                $parcel_status="";
                                switch ($parcels->status) {
                                    case '1':
                                        $parcel_status = 'Item Accepted by Courier';
                                        break;
                                    case '2':
                                        $parcel_status = 'Ready to Pickup';
                                        break;
                                    case '3':
                                        $parcel_status = 'Picked-up';
                                        break;
                                    case '4':
                                        $parcel_status = 'Collected';
                                        break;
                                    case '5':
                                        $parcel_status = ' Shipped';
                                        break;
                                    case '6':
                                        $parcel_status = 'In-Transit';
                                        break;
                                    case '7':
                                        $parcel_status = 'Hold';
                                        break;
                                    case '8':
                                        $parcel_status = ' Arrived at Destination';
                                        break;
                                    case '9':
                                        $parcel_status = 'Delivered';
                                        break;
                                    case '10':
                                        $parcel_status = ' Unsuccessfull Delivery Attempt/Return';
                                        break;
                                }
                                
                            @endphp

                            <td>{{ $parcel_status }}</td>
                            <td>{{ $parcels->date_created }}</td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
