 <x-header />
 <x-desktop-sidebar />
 <x-mobile-sidebar />
 <x-nav :user="$user" />
 <x-github />
 <x-card :student="$student" />
 <x-modal_for_table />
 <x-table :student="$student" />
 {{-- <x-chart /> --}}
<x-footer />