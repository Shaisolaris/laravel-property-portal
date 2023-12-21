<div class="stars-card d-flex align-items-center {{ $className ?? ' mt-15' }}">
    @php
        $i = 5;
    @endphp

    @if(empty($dontShowRate) or !$dontShowRate)
        <span class="badge badge-primary ml-10 mr-2">{{ $rate }}</span>
    @endif

    @if((!empty($rate) and $rate > 0) or !empty($showRateStars))
        @while(--$i >= 5 - $rate)
            <img src="/design/img/courseDetail/starFill.svg" alt="rating"/>
        @endwhile
        @while($i-- >= 0)
                <img src="/design/img/courseDetail/starFill.svg" alt="rating"/>
        @endwhile
    @endif
</div>
