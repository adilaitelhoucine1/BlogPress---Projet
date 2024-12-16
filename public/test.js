document.querySelector(".Add_article").addEventListener("click",()=>{
    document.querySelector(".Add_article").classList.add("text-blue-900")

    document.querySelector(".main_contaainer").innerHTML=`
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6 mt-10">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Add New Article</h2>

    <form action="add_article.php" method="POST" class="space-y-6">
        <!-- Title Field -->
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input 
                type="text" 
                name="title" 
                id="title" 
                required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2">
        </div>

        <!-- Content Field -->
        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea 
                name="content" 
                id="content" 
                rows="6" 
                required 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button 
                type="submit" 
                class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow-md hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 focus:outline-none">
                Submit Article
            </button>
        </div>
    </form>
</div>

    `;
})