<?php

declare(strict_types=1);

?>

<div
    class="box-border flex flex-none grow-0 flex-col items-start gap-8 self-stretch rounded-t-[20px] border border-[#E8E9F1] bg-[#F7F8FC] p-8 dark:border-[#2C2C2D] dark:bg-[#0F0F10]"
>
    <h1 class="text-2xl font-semibold">Veja as últimas comunidades que você segue</h1>

    <div
        class="mb-4 w-full rounded-lg border border-[#E8E9F1] bg-[#F2F4FA] bg-gradient-to-br p-6 dark:border-[#2C2C2D] dark:bg-[#131314]"
    >
        <div>
            <div class="flex items-center gap-3">
                <img src="/images/nerd.svg" alt="Nerd Icon" class="h-7 w-7" />
                <p class="font-medium">r/bolado</p>
            </div>
        </div>
        <div class="mt-[10px]">
            <h2
                class="mb-1 flex flex-none items-center self-stretch text-[20px] leading-[24px] font-semibold dark:text-[#FDFDFD]"
            >
                How I learn any type of new technology (As a Senior Developer)
            </h2>
            <p
                class="font-satoshi flex flex-none items-center self-stretch text-[16px] leading-[150%] font-medium text-[#9C9C9C]"
            >
                Recently, I had a task of learning a new tool that I had never used or seen anything related to, and I
                thought: why not write about how I learned it? This is the kind of article that teaches you to learn
                things from a different perspective. Not the best way, but you can reuse some of the concepts written
                here.
            </p>
        </div>

        <livewire:home.votes />
    </div>
    <div
        class="mb-4 w-full rounded-lg border border-[#E8E9F1] bg-[#F2F4FA] bg-gradient-to-br p-6 dark:border-[#2C2C2D] dark:bg-[#131314]"
    >
        <div>
            <div class="flex items-center gap-3">
                <img src="/images/nerd.svg" alt="Nerd Icon" class="h-7 w-7" />
                <p class="font-medium">r/bolado</p>
            </div>
        </div>
        <div class="mt-[10px]">
            <h2
                class="mb-1 flex flex-none items-center self-stretch text-[20px] leading-[24px] font-semibold dark:text-[#FDFDFD]"
            >
                Olá Marilene
            </h2>
            <p
                class="font-satoshi flex flex-none items-center self-stretch text-[16px] leading-[150%] font-medium text-[#9C9C9C]"
            >
                Tainha, vinho e queijo, a combinação perfeita para um jantar aconchegante.
            </p>
        </div>

        <livewire:home.votes />
    </div>
</div>

<?php
