<div class="modal " tabindex="-1" id="modal_delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cancellazione auto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Sei sicuro di voler cancellare { $car->modello }?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('admin.cars.destroy', ['car' => $car->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger btn_delete" data-postid="{{ $car->id }}"
                        onclick="return confirm('Vuoi eliminare questo record??')"><i
                            class="fa-solid fa-trash"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
