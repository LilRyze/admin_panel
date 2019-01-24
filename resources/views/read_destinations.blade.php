@extends('layouts.add_bootstrap')
@include('layouts.app')
<h2 class="col-sm-2 offset-1">Destinations</h2>
@foreach($destinations as $destination)
    <div class="container" style="max-width:80%">
        <table class="table table-striped">
            <thead>
            <tr>
                <th width="3%">ID</th>
                <th width="7%">Destination</th>
                <th>Description</th>
                <th>Price</th>
                <th>Hotel</th>
                <th>Included</th>
                <th>Tickets Included</th>
                <th>Guids Visits</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$destination->id}}</td>
                <td>{{$destination->name}}</td>
                <td>{{$destination->description}}</td>
                <td>{{$destination->price}}</td>
                <td>{{$destination->hotel}}</td>
                <td>{{$destination->included}}</td>
                <td>{{$destination->ticket_included}}</td>
                <td>{{$destination->guided_visits}}</td>
                <td><form action="{{URL::to('/update_destination'.'/'.$destination->id)}}">
                        <button type="submit" class="btn btn-outline-warning">Edit</button>
                    </form></td>
                <td><form action="{{URL::to('/delete_destination'.'/'.$destination->id)}}">
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form></td>

            </tr>
            </tbody>
        </table>
    </div>
@endforeach
<script>
if ( data['success'] )
{
alert(data['success']);
location.reload();
}
</script>
