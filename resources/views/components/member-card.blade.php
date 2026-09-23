{{--
    Reusable card for one board or committee member.

    Usage:  <x-member-card :member="$someArray" />

    Expected keys: name, role  (required)
                   image, bio, slug  (optional)
--}}
@props(['member'])

@php
    // Initials are shown only when a member has no photo yet.
    $initials = collect(explode(' ', $member['name']))
        ->map(fn ($word) => mb_substr($word, 0, 1))
        ->take(2)
        ->implode('');
@endphp

<<article class= "flex flex-col overflow-hidden rounded-lg border border-slate-200 bg-white transition-colors hover:border-[#0B2E5F]"> 
    {{--  Aspect ratio is set on the image itself, so that the image is always the same shape, even if it hasn't loaded yet.  --}} 

    {{-- A fixed aspect ratio keeps every photo the same shape at every screen size --}}
    @if (!empty($member['image']))
        <img src="{{ asset($member['image']) }}"
             alt="{{ $member['name'] }}"
             class="aspect-[4/5] w-full object-cover object-top"
             loading="lazy">
    @else
        <div class="flex aspect-[4/5] w-full items-center justify-center bg-slate-100 text-4xl font-semibold text-slate-400"
             aria-hidden="true">
            {{ $initials }}
        </div>
    @endif

    <div class="flex flex-1 flex-col p-5">
        <h4 class="text-lg font-semibold text-[#0B2E5F]">{{ $member['name'] }}</h4> 
        <p class="mt-1 text-sm font-medium text-lime-700">{{ $member['role'] }}</p>

        @if (!empty($member['bio']))
            <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ $member['bio'] }}</p>
        @endif 

        {{-- mt-auto pushes the link to the bottom so links line up across a row --}}
        @if (!empty($member['slug']))
            <a href="{{ route('board.show', $member['slug']) }}"
               class="mt-auto pt-4 text-sm font-semibold text-[#0B2E5F] underline-offset-4 hover:underline focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#0B2E5F]">
                Read full biography
            </a>
        @endif
    </div>
</article>  