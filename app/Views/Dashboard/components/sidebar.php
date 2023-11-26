<aside x-bind:class="sidebar ? '-ml-[17rem]' : ' ml-0' " class="bg-[#004225] h-[100vh] w-[17rem] transition" style="transition: 300ms">
<div class="flex flex-col items-center text-white mb-5">
                <img src="<?= base_url() ?>/src/img/logo.svg" alt="logo" id="logo">
                <h1 class="text-3xl font-bold">KEBOONKU</h1>
            </div>
        <ul class="text-white w-[17rem]">
            <li><a class="py-3 px-5 block hover:bg-green-500 w-[17rem]" href="<?= base_url() ?>/dashboard">Dashboard</a></li>
            <li><a class="py-3 px-5 block hover:bg-green-500 w-[17rem]" href="<?= base_url() ?>/dashboard/history">History</a></li>
            <li><a class="py-3 px-5 block hover:bg-green-500 w-[17rem]" href="#">About</a></li>
            <li><a class="py-3 px-5 block hover:bg-green-500 w-[17rem]" href="#">Profile</a></li>
        </ul>    
</aside>