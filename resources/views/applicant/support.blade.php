@extends('layouts.applicant-new')

@section('title', 'Support')

@section('content')
<div class="space-y-8">
    <div>
        <p class="text-label-sm text-on-surface-variant tracking-[0.1em] uppercase font-semibold mb-1">Help</p>
        <h2 class="text-4xl font-extrabold text-primary tracking-tight">Support</h2>
    </div>

    <div class="bg-surface-container-lowest p-6 rounded-xl">
        <h3 class="text-lg font-bold text-on-surface mb-6">Frequently Asked Questions</h3>
        
        <div class="space-y-6">
            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I check my application status?</h4>
                <p class="text-sm text-on-surface-variant">Log in to your dashboard and your application status will be displayed on the main dashboard card. You can also visit the Settings page for detailed status information.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I add a new client?</h4>
                <p class="text-sm text-on-surface-variant">Navigate to the Clients section from the sidebar. Click "Add New Client" and fill in the required information including client name, email, phone, address, and select the appropriate service type.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I generate reports?</h4>
                <p class="text-sm text-on-surface-variant">Go to the Reports section from the sidebar. You can select between Tax Reports and Audit Reports, choose the date range, and click "Generate Report" to create and download the report.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I update my profile information?</h4>
                <p class="text-sm text-on-surface-variant">Visit the Settings page by clicking on Settings in the sidebar. You can update your name, email address, and change your password from the respective sections.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">What if I forgot my password?</h4>
                <p class="text-sm text-on-surface-variant">Contact your administrator to request a password reset. They can help you regain access to your account.</p>
            </div>

            <div>
                <h4 class="font-bold text-on-surface mb-2">How do I log out?</h4>
                <p class="text-sm text-on-surface-variant">Click on your profile name in the bottom left corner of the sidebar, then click the "Logout" button.</p>
            </div>
        </div>
    </div>

    <div class="bg-surface-container-lowest p-6 rounded-xl">
        <h3 class="text-lg font-bold text-on-surface mb-4">Need More Help?</h3>
        <p class="text-sm text-on-surface-variant mb-4">If you can't find the answer to your question, please contact your administrator for assistance.</p>
        <div class="flex items-center gap-3">
            <span class="material-symbols-outlined text-primary">email</span>
            <span class="text-sm text-on-surface">Contact: support@akawnt.com</span>
        </div>
    </div>
</div>
@endsection