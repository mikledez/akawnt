@extends('layouts.admin')

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
                <h4 class="font-bold text-on-surface mb-2">How do I manage job applications?</h4>
                <p class="text-sm text-on-surface-variant">Go to the Applications section from the sidebar. You can view all applications, search by name or email, and filter by status (pending, reviewing, accepted, declined). Click on an application to view full details.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I accept or decline an applicant?</h4>
                <p class="text-sm text-on-surface-variant">Open an application detail page. You'll see action buttons to Accept, Decline, or Mark as Reviewing. When accepted, the applicant will receive an email with login credentials automatically.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I download applicant resumes?</h4>
                <p class="text-sm text-on-surface-variant">Open an application detail page. If the applicant has uploaded a resume, you'll see a "Download Resume" button to securely download the file.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I manage accountants?</h4>
                <p class="text-sm text-on-surface-variant">Navigate to the Accountants section. You can view all accepted accountants, search their records, and manage their accounts. You can also edit their profile information or deactivate accounts if needed.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I generate reports?</h4>
                <p class="text-sm text-on-surface-variant">Go to the Reports section. You can generate reports for job applications or accountants. Choose your format (Excel or PDF) and the relevant date range, then click to download.</p>
            </div>

            <div class="border-b border-surface-container pb-6">
                <h4 class="font-bold text-on-surface mb-2">How do I add new administrators?</h4>
                <p class="text-sm text-on-surface-variant">Go to Admin Management and click "Add New Admin". You must add their email to the whitelist first before they can register. Only whitelisted emails can create admin accounts.</p>
            </div>

            <div>
                <h4 class="font-bold text-on-surface mb-2">How do I log out?</h4>
                <p class="text-sm text-on-surface-variant">Click on your profile name in the bottom left corner of the sidebar, then click the "Logout" button.</p>
            </div>
        </div>
    </div>

    <div class="bg-surface-container-lowest p-6 rounded-xl">
        <h3 class="text-lg font-bold text-on-surface mb-4">System Information</h3>
        <div class="space-y-3 text-sm">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary">info</span>
                <span class="text-on-surface-variant">Version:</span>
                <span class="font-medium text-on-surface">1.0.0</span>
            </div>
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-primary">code</span>
                <span class="text-on-surface-variant">Laravel:</span>
                <span class="font-medium text-on-surface">{{ app()->version() }}</span>
            </div>
        </div>
    </div>
</div>
@endsection