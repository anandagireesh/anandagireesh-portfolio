<div>
<div class="card text-center">
    <div class="card-body">
        <img src="{{asset('assets/admin/images/users/avatar-1.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
        alt="profile-image">

        <h4 class="mb-1 mt-2">{{$name}}</h4>
        <p class="text-muted">{{$role}}</p>

        {{-- <button type="button" class="btn btn-success btn-sm mb-2">Follow</button>
        <button type="button" class="btn btn-danger btn-sm mb-2">Message</button> --}}

        <div class="text-start mt-3">
            <h4 class="fs-13 text-uppercase">About Me :</h4>
            <p class="text-muted mb-3">
               {{$bio}}
            </p>
            <p class="text-muted mb-2"><strong>Full Name :</strong> <span class="ms-2">{{$name}}</span></p>

            <p class="text-muted mb-2"><strong>Mobile :</strong><span class="ms-2">{{$phone}}</span></p>

            <p class="text-muted mb-2"><strong>Email :</strong> <span class="ms-2 ">{{$email}}</span></p>

            {{-- <p class="text-muted mb-1"><strong>Location :</strong> <span class="ms-2">USA</span></p> --}}
        </div>

        <ul class="social-list list-inline mt-3 mb-0">
            <li class="list-inline-item">
                <a href="{{$facebook}}" class="social-list-item border-primary text-primary"><i class="ri-facebook-circle-fill"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="{{$instagram}}" class="social-list-item border-danger text-danger"><i class="ri-instagram-fill"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="{{$twitter}}" class="social-list-item border-info text-info"><i class="ri-twitter-fill"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="{{$linkedin}}" class="social-list-item border-secondary text-primary"><i class="ri-linkedin-fill"></i></a>
            </li>
            <li class="list-inline-item">
                <a href="{{$website}}" class="social-list-item border-dark text-dark"><i class="ri-earth-fill"></i></a>
            </li>
        </ul>
    </div> <!-- end card-body -->
</div> <!-- end card -->
</div>
