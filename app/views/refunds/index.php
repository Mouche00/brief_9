<?php require APPROOT . '/views/inc/header.php'; ?>
    
    <section class="relative h-full w-full flex justify-center items-center">
        <!-- SHADOW -->
        <div class="absolute w-full h-full bg-black rounded-md z-[-1] translate-y-[12px] translate-x-[10px]"></div>

        <!-- ADD BUTTON -->
        <button type="button" id="add-button" class="w-[4%] h-full bg-hector text-white text-5xl flex justify-center items-center rounded-l-md">
            <h1>+</h1>
        </button>

        <!-- TABLE -->
        <div class="w-[96%] h-full bg-white rounded-r-md">
            <table class="text-white text-center rounded border border-separate border-tools-table-outline border-hector border-2 w-[94%] m-auto mt-[3%]">
                <thead class="h-8">
                    <th class="rounded-tl-sm bg-hector">ID</th>
                    <th class="bg-hector">NAME</th>
                    <th class="bg-hector">ADDRESS</th>
                    <th class="rounded-tr-sm bg-hector">ACTIONS</th>
                </thead>
                <tbody class="rounded-b-sm text-black">
                    <!-- CONTENT ADDED BY AJAX -->
                </tbody>
            </table>
        </div>
    </section>
</main>

<div id="overlay" class="absolute w-full h-full bg-black opacity-75 z-10"></div>

<section id="form-container" class="absolute w-full h-full z-20">
    <div class="w-[50%] h-[50%] bg-white m-auto">
        <form action="" method="post">

        </form>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>