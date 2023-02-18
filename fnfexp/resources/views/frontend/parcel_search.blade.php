@extends('frontend.layouts.base')
@section('main-container')
    <div class="container">


        <tbody id="internshipTable">

            <tr>

                <td>
                    <a href=" ">
                        title
                    </a>
                </td>
                <td class="align-middle">
                    <p class="badge badge-success"> months</p>
                </td>
                <td>
                    <p class="badge badge-dark"> provider</p>
                </td>
                <td>date</td>
                <td>end date</td>

                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a title="make active" class="mr-1 btn btn-primary" href=" ">
                            <i class="fa fa-play"></i>
                        </a>
                        <a title="make inactive" class="mr-1 btn btn-danger" href=" ">
                            <i class="fa fa-times"></i>
                        </a>
                        <a title="mark as completed" style="background-color: darkgreen" class="btn btn-success"
                            href=" ">
                            <i class="fa fa-check"></i>
                        </a>
                    </div>
                </td>
            </tr>

        </tbody>
        </table>
    </div>



    <script>
        $(function() {
            $('.table').DataTable({
                "paging": true,
                "responsive": true
            });
        })
    </script>
@endsection
