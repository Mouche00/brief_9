<?php require APPROOT . '/views/inc/header.php'; ?>
    
<section class="h-[90%] w-full flex justify-center items-center">
    <div class="relative w-[80%] h-[70%] bg-white rounded-md">
        <table class="text-white rounded border border-separate border-tools-table-outline border-hector border-2 w-[94%] m-auto mt-[3%]">
            <thead class="h-8" >
                <th class="rounded-tl-sm bg-hector">ID</th>
                <th class="bg-hector">NAME</th>
                <th class="bg-hector">ADDRESS</th>
                <th class="rounded-tr-sm bg-hector">ACTIONS</th>
            </thead>
            <tbody class="rounded-b-sm text-black">
                <tr>
                    <td>No records found</td>
                </tr>
            </tbody>
        </table>
        <div class="absolute w-full h-full bg-black rounded-md z-[-1] translate-y-[-15%] translate-x-[1%]">
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; ?>