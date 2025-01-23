<section class="search-feature w-2/4 mt-5 mx-auto">
    <form action="../../models/searchProduct.php" method="GET" class="bg-blue-50 p-5">
        <div class="mb-2">
            <label for="searchTerm" class="label font-bold">
                Enter product name or desc
            </label>
            <input
                type="text"
                name="searchTerm"
                id="searchTerm"
                placeholder="Product name or desc"
                class="input input-bordered w-full"
                required />
        </div>

        <button type="submit" class="btn btn-success mt-5">
            SEARCH
        </button>
    </form>
</section>