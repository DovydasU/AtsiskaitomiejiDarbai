<!-- resources/views/trip/show.blade.php -->

<!-- Button to trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#showModal">
    Show Trip
</button>

<!-- Modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel">Trip Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1>{{ $trip->name }}</h1>
                <p>Location: {{ $trip->location }}</p>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>
</div>