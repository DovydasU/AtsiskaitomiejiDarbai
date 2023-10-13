<tr>
    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $trip->name }}</strong></td>
    <td>{{ $trip->location }}</td>
    <td>{{ $trip->price }}</td>
    <td>{{ $trip->space }}</td>
    <td>{{ $trip->description }}</td>
    <td>{{ $trip->contact }}</td>
    <td>
        <form action="{{ route('trip.destroy', $trip) }}" method="POST">
            @csrf
            @method('DELETE')

            <a class="btn btn-info" href="{{ route('trip.show', $trip->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('trip.edit', $trip->id) }}">Edit</a>


            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
</tr>