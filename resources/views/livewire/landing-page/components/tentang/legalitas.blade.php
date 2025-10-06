<section id="legalitas" class="py-20 bg-base-100">
    <div class="container mx-auto max-w-7xl px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="text-center space-y-4 mb-16" data-aos="fade-up">
            <span class="badge badge-accent badge-lg">{{ $this->getText($content['badge']) }}</span>
            <h2 class="text-4xl lg:text-5xl font-bold text-base-content">
                {{ $this->getText($content['heading']) }}
                <span class="text-primary">{{ $this->getText($content['headingAccent']) }}</span>
            </h2>
            <p class="text-lg text-base-content/70 max-w-2xl mx-auto">
                {{ $this->getText($content['description']) }}
            </p>
        </div>

        {{-- Legalitas Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($content['documents'] as $index => $doc)
                <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}" class="h-full {{ $doc['span'] ?? '' }}">
                    <div class="card bg-gradient-to-br from-{{ $doc['color'] }}/5 to-{{ $doc['color'] }}/10 border-2 border-{{ $doc['color'] }}/20 p-4 md:p-8 h-full">
                        <div class="flex items-start gap-3 md:gap-6">
                            <div class="w-12 h-12 md:w-16 md:h-16 bg-{{ $doc['color'] }} rounded-xl md:rounded-2xl flex items-center justify-center flex-shrink-0">
                                <x-icon name="{{ $doc['icon'] }}" class="h-6 md:h-8 text-{{ $doc['color'] }}-content" />
                            </div>
                            <div class="flex-1 space-y-2 md:space-y-3">
                                <h3 class="text-lg md:text-2xl font-bold text-{{ $doc['color'] }} break-words">
                                    {{ $this->getText($doc['title']) }}
                                </h3>

                                @if(isset($doc['span']))
                                    {{-- IUP OPK khusus dengan grid --}}
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-base-content/80">
                                        @foreach($doc['details'] as $detail)
                                            <div>
                                                @if($detail['label'])
                                                    <p class="text-xs md:text-sm">
                                                        <span class="font-semibold">{{ $this->getText($detail['label']) }}:</span>
                                                    </p>
                                                @endif
                                                <p class="text-sm md:text-lg {{ isset($detail['highlight']) ? 'font-mono font-bold text-' . $doc['color'] : '' }} mt-1 break-all">
                                                    {{ $this->getText($detail['value']) }}
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                    @if(isset($doc['badge']))
                                        <div class="pt-2 space-y-1">
                                            <span class="badge badge-{{ $doc['color'] }} text-xs md:text-sm">{{ $doc['badge'] }}</span>
                                            <p class="text-xs md:text-sm break-words">{{ $this->getText($doc['badgeText']) }}</p>
                                        </div>
                                    @endif
                                @else
                                    {{-- Dokumen biasa --}}
                                    <div class="space-y-2 text-base-content/80">
                                        @foreach($doc['details'] as $detail)
                                            @if($detail['label'])
                                                <p class="text-xs md:text-sm">
                                                    <span class="font-semibold">{{ $this->getText($detail['label']) }}:</span>
                                                    @if(!isset($detail['highlight']))
                                                        {{ $this->getText($detail['value']) }}
                                                    @endif
                                                </p>
                                            @endif
                                            @if(isset($detail['highlight']))
                                                <p class="text-base md:text-xl font-mono font-bold text-{{ $doc['color'] }} break-all">
                                                    {{ $this->getText($detail['value']) }}
                                                </p>
                                            @elseif(!$detail['label'])
                                                <p class="text-xs md:text-sm break-words">{{ $this->getText($detail['value']) }}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
