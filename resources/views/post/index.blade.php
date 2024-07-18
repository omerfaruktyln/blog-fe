<x-app-layout :meta-title="'TaySoft Blog - ' . $category->title"
              :meta-description="'Category ' . $category->title">
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3  px-3">
            <div class=" flex flex-col items-center">
                @foreach($posts as $post)
                    <x-post-item :post="$post"/>
                @endforeach
            </div>
   
        </section>

        <!-- Sidebar Section -->
        <x-sidebar />

    </div>
</x-app-layout>
