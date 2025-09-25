@extends('mainlayout')

    @section('styles')
        <link rel="stylesheet" href="css/edit.css">
    @endsection

    @section('title', 'Profile')

        @section('content')

            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>

            <div class="edit-profile">
                <h2>My Profile</h2>
                <p>Manage your account settings and preferences</p>
                <div class="edit-form">
                    <form action="{{ route('edit.update') }}" method="POST">
                        @csrf

                        <h3>Profile Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="edit-profile-label">Full Name</label>
                                <input type="text" name="name" value="{{$user->name}}" placeholder="Enter your new name">

                                <label for="email" class="edit-profile-label">Email Address</label>
                                <input type="email" name="email" value="{{ $user->email }}" placeholder="Enter your new email">
                            </div>

                            <div class="col-md-6">
                                <label for="memberstart" class="edit-profile-label">Member Since</label>
                                <input type="text" name="memberstart" value="{{$user->created_at->format('Y F d')}}" readonly>

                                <label for="memberstart" class="edit-profile-label">Event Attended</label>
                                <input type="text" name="memberstart" readonly>
                            </div>
                        </div>

                        <hr>
                        <label for="togglePassword" class="edit-profile-button">Edit Profile</label>

                        <input type="checkbox" id="togglePassword" hidden>

                        <div class="password-section">
                            <div class="password-items">
                                <div class="d-flex flex-column">
                                    <label class="edit-profile-label">New Password</label>
                                    <input type="password" name="password">
                                </div>
                                <div class="d-flex flex-column">
                                    <label class="edit-profile-label">Confirm New Password</label>
                                    <input type="password" name="password_confirmation">
                                </div>
                            </div>

                            <button type="submit" class="edit-profile-button">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
            
        @endsection
    </body>
