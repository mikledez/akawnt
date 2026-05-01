@extends('layouts.applicant-new')

@section('title', 'Edit Profile')

@section('content')
<div class="space-y-8 max-w-2xl">
    <div>
        <p class="text-label-sm text-on-surface-variant tracking-[0.1em] uppercase font-semibold mb-1">Account</p>
        <h2 class="text-4xl font-extrabold text-primary tracking-tight">Edit Profile</h2>
    </div>

    <div class="bg-surface-container-lowest p-8 rounded-xl">
        <form method="POST" action="{{ route('applicant.profile.update') }}">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-bold text-on-surface mb-2">Full Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="w-full bg-surface-container-highest/50 border border-outline-variant/20 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" required>
                </div>
                <div>
                    <label class="block text-sm font-bold text-on-surface mb-2">Email Address</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="w-full bg-surface-container-highest/50 border border-outline-variant/20 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" required>
                </div>
                <div class="flex gap-3 pt-2">
                    <button type="submit" class="px-6 py-3 bg-primary text-on-primary text-sm font-bold rounded-lg hover:bg-primary-dim transition-colors">
                        Save Changes
                    </button>
                    <a href="{{ route('applicant.dashboard') }}" class="px-6 py-3 bg-surface-container text-on-surface text-sm font-bold rounded-lg hover:bg-surface-container-high transition-colors">
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
