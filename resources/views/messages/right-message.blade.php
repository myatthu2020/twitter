<div class="card">
    <div class="card-header pb-0 border-0">
        <h5 class="">Chats</h5>
    </div>
    <div class="card-body">
        @foreach ($users as $user)
            <div class=" border-bottom border-danger">
                <div class="d-flex align-items-center mb-3">
                    <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="{{ $user->getImageURL() }}"
                        alt="Mario Avatar">
                    <div>
                        <h5 class="card-title mb-0">
                            <a href="">{{ $user->name }}</a>
                        </h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
