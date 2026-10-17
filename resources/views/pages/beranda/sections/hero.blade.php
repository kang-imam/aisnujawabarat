@php
$waNumber = '6285887770636';
$waMessage = "Assalamu'alaikum warahmatullahi wabarakatuh.\n\nSaya ingin menghubungi Call Center Pengaduan Santri / Rumah Aman Digital Jawa Barat.\n\nKeperluan saya:\n[Silakan tuliskan secara singkat informasi atau bantuan yang dibutuhkan]\n\nMohon informasi dan arahan mengenai langkah selanjutnya. Terima kasih.";
$waUrl = 'https://wa.me/'.$waNumber.'?text='.rawurlencode($waMessage);
@endphp
<section id="beranda" aria-labelledby="hero-title" class="relative isolate overflow-hidden bg-[#dcefe7] text-white dark:bg-[#061c17]">
    <div class="pointer-events-none absolute inset-0 -z-10 overflow-hidden" aria-hidden="true">
        <div class="absolute inset-0 bg-gradient-to-br from-[#075e54] via-[#06483f] to-[#032823] dark:from-[#061c17] dark:via-[#08271f] dark:to-[#03130f]"></div>
        <div class="absolute -left-32 -top-40 h-[34rem] w-[34rem] rounded-full bg-[#5ca397]/20 blur-[90px] dark:bg-[#287f73]/15"></div>
        <div class="absolute -bottom-48 right-[-8rem] h-[38rem] w-[38rem] rounded-full bg-[#287f73]/35 blur-[100px] dark:bg-[#075e54]/25"></div>
        <div class="absolute right-[-7rem] top-[-10rem] h-[34rem] w-[34rem] rounded-full border-[1px] border-white/[0.07]"></div>
        <div class="absolute right-[-3rem] top-[-6rem] h-[26rem] w-[26rem] rounded-full border-[1px] border-white/[0.06]"></div>
        <div class="absolute bottom-0 left-0 h-32 w-full bg-gradient-to-t from-black/[0.09] to-transparent dark:from-black/20"></div>
        <div class="absolute inset-0 bg-[linear-gradient(115deg,transparent_0%,rgba(255,255,255,0.025)_48%,transparent_72%)]"></div>
    </div>
    <div class="container-site relative grid items-center gap-12 py-14 sm:py-20 lg:min-h-[700px] lg:grid-cols-[minmax(0,1.08fr)_minmax(320px,0.82fr)] lg:gap-14 lg:py-24">
        <div class="relative z-10 max-w-2xl">
            <div class="inline-flex items-center gap-2.5 rounded-full border border-white/15 bg-white/[0.07] px-4 py-2 text-xs font-bold tracking-[0.12em] text-[#e6c77e] backdrop-blur-sm sm:text-sm">
                <span class="size-2 rounded-full bg-[#e0b34e]"></span>
                AISNU JAWA BARAT
                <span class="text-white/35">/</span>
                <span class="tracking-normal text-white/80">Rumah Aman Digital</span>
            </div>
            <p class="mt-8 text-xs font-bold uppercase tracking-[0.22em] text-[#a9d6c6] sm:text-sm">Perlindungan Santri · Pesantren Aman</p>
            <h1 id="hero-title" class="mt-4 max-w-3xl text-4xl font-bold leading-[1.12] tracking-tight text-white sm:text-5xl lg:text-[3.8rem]">
                Setiap Santri Berhak Aman.
                <span class="mt-3 block text-[#e8c66f]">Setiap Aduan Layak Didengar.</span>
            </h1>
            <p class="mt-6 max-w-xl text-base leading-8 text-white/75 sm:text-lg">
                Ruang awal untuk mencari informasi, menyampaikan persoalan, dan memperoleh arahan terkait perlindungan santri. AISNU Jawa Barat mendorong lingkungan pesantren yang aman, bermartabat, dan bebas dari kekerasan.
            </p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-accent min-h-14 w-full justify-center px-5 py-3.5 text-sm sm:w-auto sm:px-6 sm:text-base" aria-label="Hubungi Call Center Pengaduan Santri melalui WhatsApp">
                    <x-heroicon-o-chat-bubble-left-right class="size-5 shrink-0" aria-hidden="true" />
                    Hubungi Call Center
                    <x-heroicon-o-arrow-up-right class="size-4 shrink-0" aria-hidden="true" />
                </a>
                <a href="{{ route('informasi') }}" class="btn min-h-14 w-full justify-center border border-white/25 bg-white/[0.06] px-5 py-3.5 text-sm text-white transition hover:border-white/40 hover:bg-white/[0.12] sm:w-auto sm:px-6 sm:text-base">
                    <x-heroicon-o-book-open class="size-5 shrink-0 text-[#e8c66f]" aria-hidden="true" />
                    Jelajahi Informasi
                </a>
            </div>
            <div class="mt-4 flex items-start gap-2.5 text-xs leading-6 text-white/60 sm:text-sm">
                <x-heroicon-o-information-circle class="mt-1 size-4 shrink-0 text-[#e8c66f]" aria-hidden="true" />
                <p>Pesan awal disiapkan di WhatsApp dan dapat Anda tinjau sebelum dikirim.</p>
            </div>
            <div class="mt-10 grid grid-cols-1 gap-4 border-t border-white/15 pt-7 sm:grid-cols-3 sm:gap-5">
                <div class="flex items-start gap-3">
                    <span class="flex size-10 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/[0.06] text-[#e8c66f]">
                        <x-heroicon-o-shield-check class="size-5" aria-hidden="true" />
                    </span>
                    <div>
                        <p class="text-sm font-bold text-white">Perlindungan</p>
                        <p class="mt-1 text-xs leading-5 text-white/60">Mengutamakan keselamatan santri.</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <span class="flex size-10 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/[0.06] text-[#e8c66f]">
                        <x-heroicon-o-heart class="size-5" aria-hidden="true" />
                    </span>
                    <div>
                        <p class="text-sm font-bold text-white">Kepedulian</p>
                        <p class="mt-1 text-xs leading-5 text-white/60">Mendengar dengan empati dan hormat.</p>
                    </div>
                </div>
                <div class="flex items-start gap-3">
                    <span class="flex size-10 shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/[0.06] text-[#e8c66f]">
                        <x-heroicon-o-megaphone class="size-5" aria-hidden="true" />
                    </span>
                    <div>
                        <p class="text-sm font-bold text-white">Pencegahan</p>
                        <p class="mt-1 text-xs leading-5 text-white/60">Membangun pesantren yang aman.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mx-auto w-full max-w-lg lg:ml-auto">
            <div class="absolute -inset-4 rounded-[2rem] bg-[#5ca397]/10 blur-2xl" aria-hidden="true"></div>
            <div class="relative overflow-hidden rounded-[1.5rem] border border-white/15 bg-[#f8fcfa] text-[#173b32] shadow-[0_28px_80px_rgba(0,0,0,0.22)] dark:border-white/10 dark:bg-[#102820] dark:text-[#f0f5f2]">
                <div class="relative overflow-hidden bg-[#eaf5ef] px-5 py-6 dark:bg-[#15372c] sm:px-7 sm:py-7">
                    <div class="absolute right-0 top-0 h-full w-1.5 bg-gradient-to-b from-[#e8c66f] via-[#cc9933] to-[#287f73]" aria-hidden="true"></div>
                    <div class="absolute -right-12 -top-16 size-48 rounded-full bg-[#c5e3d6]/55 blur-2xl dark:bg-[#287f73]/20" aria-hidden="true"></div>
                    <div class="relative flex items-start gap-4">
                        <span class="flex size-14 shrink-0 items-center justify-center rounded-2xl bg-[#075e54] text-white shadow-lg shadow-[#075e54]/15 dark:bg-[#1e5949]">
                            <x-heroicon-o-shield-check class="size-8" aria-hidden="true" />
                        </span>
                        <div class="min-w-0 flex-1">
                            <p class="text-xs font-bold uppercase tracking-[0.15em] text-[#075e54] dark:text-[#a9d6c6]">Pusat Akses Layanan</p>
                            <h2 class="mt-2 text-xl font-bold leading-snug text-[#063b35] dark:text-white sm:text-2xl">Call Center Pengaduan Santri</h2>
                            <p class="mt-2 text-sm leading-6 text-[#526b62] dark:text-[#b2c6bd]">Rumah Aman Digital Jawa Barat</p>
                        </div>
                    </div>
                    <div class="relative mt-5 flex items-start gap-3 rounded-xl border border-[#075e54]/10 bg-white/65 p-3.5 dark:border-white/10 dark:bg-black/10">
                        <x-heroicon-o-heart class="mt-0.5 size-5 shrink-0 text-[#075e54] dark:text-[#e8c66f]" aria-hidden="true" />
                        <p class="text-xs leading-6 text-[#405d53] dark:text-[#c0d2ca] sm:text-sm">Anda berhak mencari informasi dan menyampaikan kebutuhan dengan cara yang terasa aman bagi Anda.</p>
                    </div>
                </div>
                <div class="p-5 sm:p-7">
                    <p class="text-xs font-bold uppercase tracking-[0.15em] text-[#687e74] dark:text-[#9db3a9]">Akses dukungan</p>
                    <div class="mt-4 space-y-3">
                        <div class="flex items-start gap-3.5 rounded-xl border border-[#e2e8e5] bg-white p-4 dark:border-white/10 dark:bg-white/[0.035]">
                            <span class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-[#eef7f5] text-[#075e54] dark:bg-[#b4dcd1]/10 dark:text-[#b4dcd1]">
                                <x-heroicon-o-chat-bubble-left-right class="size-5" aria-hidden="true" />
                            </span>
                            <div>
                                <h3 class="text-sm font-bold text-[#173b32] dark:text-white">Menyampaikan pengaduan</h3>
                                <p class="mt-1 text-xs leading-6 text-[#626b68] dark:text-[#b2bfba]">Mencari jalur komunikasi untuk persoalan keselamatan dan perlindungan santri.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5 rounded-xl border border-[#e2e8e5] bg-white p-4 dark:border-white/10 dark:bg-white/[0.035]">
                            <span class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-[#eef7f5] text-[#075e54] dark:bg-[#b4dcd1]/10 dark:text-[#b4dcd1]">
                                <x-heroicon-o-information-circle class="size-5" aria-hidden="true" />
                            </span>
                            <div>
                                <h3 class="text-sm font-bold text-[#173b32] dark:text-white">Informasi dan arahan</h3>
                                <p class="mt-1 text-xs leading-6 text-[#626b68] dark:text-[#b2bfba]">Menanyakan langkah awal dan pilihan dukungan yang relevan.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3.5 rounded-xl border border-[#e2e8e5] bg-white p-4 dark:border-white/10 dark:bg-white/[0.035]">
                            <span class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-[#eef7f5] text-[#075e54] dark:bg-[#b4dcd1]/10 dark:text-[#b4dcd1]">
                                <x-heroicon-o-user-group class="size-5" aria-hidden="true" />
                            </span>
                            <div>
                                <h3 class="text-sm font-bold text-[#173b32] dark:text-white">Dukungan perlindungan</h3>
                                <p class="mt-1 text-xs leading-6 text-[#626b68] dark:text-[#b2bfba]">Mencari informasi mengenai dukungan atau rujukan yang sesuai.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 rounded-2xl border border-[#cc9933]/35 bg-[#fbf3e1] p-4 dark:border-[#e0b34e]/25 dark:bg-[#3a3020] sm:p-5">
                        <div class="flex items-center gap-3">
                            <span class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-[#cc9933]/20 text-[#075e54] dark:bg-[#e0b34e]/15 dark:text-[#e8c66f]">
                                <x-heroicon-o-device-phone-mobile class="size-6" aria-hidden="true" />
                            </span>
                            <div class="min-w-0">
                                <p class="text-xs font-medium text-[#626b68] dark:text-[#d4c6a4]">WhatsApp Call Center</p>
                                <p class="mt-1 text-lg font-bold tracking-wide text-[#173b32] dark:text-white sm:text-xl">0858 8777 0636</p>
                            </div>
                        </div>
                        <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-accent mt-4 min-h-12 w-full justify-center px-4 py-3" aria-label="Mulai percakapan WhatsApp dengan Call Center Pengaduan Santri">
                            <x-heroicon-o-chat-bubble-left-right class="size-5 shrink-0" aria-hidden="true" />
                            Mulai Percakapan WhatsApp
                            <x-heroicon-o-arrow-up-right class="size-4 shrink-0" aria-hidden="true" />
                        </a>
                        <p class="mt-3 text-center text-[11px] leading-5 text-[#626b68] dark:text-[#d4c6a4]">Pesan awal dapat ditinjau dan diedit sebelum Anda mengirimnya.</p>
                    </div>
                    <div class="mt-5 flex items-start gap-2.5 border-t border-[#e2e8e5] pt-4 dark:border-white/10">
                        <x-heroicon-o-lock-closed class="mt-0.5 size-4 shrink-0 text-[#687e74] dark:text-[#9db3a9]" aria-hidden="true" />
                        <p class="text-[11px] leading-5 text-[#626b68] dark:text-[#a8beb4]">Jaga privasi Anda. Bagikan informasi seperlunya dan hindari mengirim kata sandi, kode OTP, atau dokumen sensitif melalui percakapan awal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0 left-0 h-1 w-full bg-gradient-to-r from-[#075e54] via-[#e0b34e] to-[#287f73]" aria-hidden="true"></div>
</section>