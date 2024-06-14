{{-- <x-app-layout> --}}
<style>
    /* Gaya umum */
    body {
        font-family: Arial, sans-serif;
        background-color: #f7fafc;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .card {
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .card h2 {
        color: #333333;
        font-size: 24px;
        margin-bottom: 15px;
        border-bottom: 1px solid #eeeeee;
        padding-bottom: 10px;
    }

    .form-container {
        max-width: 600px;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #dddddd;
        border-radius: 4px;
    }

    .form-group button {
        padding: 12px 20px;
        background-color: #4caf50;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .form-group button:hover {
        background-color: #45a049;
    }

    .text-center {
        text-align: center;
    }

    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        background-color: #dff0d8;
        border-color: #d0e9c6;
        color: #3c763d;
    }

    .alert-danger {
        background-color: #f2dede;
        border-color: #ebccd1;
        color: #a94442;
    }

    .header {
        background-color: #ffffff;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .header h2 {
        color: #333333;
        font-size: 28px;
        margin: 0;
    }

    .header p {
        color: #666666;
        font-size: 16px;
        margin-top: 10px;
    }

    .header .dark-mode {
        color: #ffffff;
        background-color: #333333;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .header .dark-mode:hover {
        background-color: #555555;
    }
</style>

<x-slot name="header">
    <div class="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
        <p>Edit your profile information, update your password, or delete your account.</p>
    </div>
</x-slot>

<div class="container">
    <div class="card">
        <div class="form-container">
            <div class="mb-6">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>
    </div>

    <div class="card">
        <div class="form-container">
            <div class="mb-6">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>

    <div class="card">
        <div class="form-container">
            <div class="mb-6">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
    <a href="/">Back</a>
</div>

{{-- </x-app-layout> --}}
