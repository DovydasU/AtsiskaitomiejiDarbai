<tr>
    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $trip->name }}</strong></td>
    <td>{{ $trip->location }}</td>
    <td>{{ $trip->price }}</td>
    <td>{{ $trip->space }}</td>
    <td>{{ $trip->description }}</td>
    <td>{{ $trip->contact }}</td>
    <td>
        <div class="dropdown">
            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i
                        class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i
                        class="bx bx-show me-1"></i> Show</a>
                <a class="dropdown-item" href="javascript:void(0);"><i
                        class="bx bx-trash me-1"></i> Delete</a>
            </div>
        </div>
    </td>
</tr>