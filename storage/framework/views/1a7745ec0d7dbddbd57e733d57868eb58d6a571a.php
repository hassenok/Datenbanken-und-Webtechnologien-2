<?php $__env->startSection('title'); ?> Artikel <?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/cookiecheck.js')); ?>"></script>
    <!--script src="<?php echo e(asset('js/search.js')); ?>"></script-->
    <script src="https://unpkg.com/vue@3"></script>
    <script src="<?php echo e(asset('js/vue_articles.js')); ?>"></script>
    <script src="<?php echo e(asset('js/broadcasts.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('menu'); ?>
    <ul id="menu">
        <li class="menu-item"><a id="Home">Home</a></li>
        <li class="menu-item"><a id="Kategorien">Kategorien</a></li>
        <li class="menu-item"><a id="Verkaufen">Verkaufen</a></li>
        <li id="List" class="menu-item"><a id="Unternehmen">Unternehmen</a>
            <ul id="unternehmenList" class="dropdown">
                <li  class="menu-dropdown-item"><a id="Philosophie">Philosophie</a></li>
                <li  class="menu-dropdown-item"><a id="Karriere">Karriere</a></li>
            </ul>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="app">
    <h2 class="my-2">Artikelsuche</h2>
<div class="input-group">


    <input type="text" v-model="search" v-on:input="getArticles" placeholder="Suche" class="form-control my-4">

    <input type="hidden" id="csrf-token" content="<?php echo e(csrf_token()); ?>">
</div>
    <br>


        <h2 class="my-2">Warenkorb</h2>
        <table id="shoppingTable" class="table">
            <thead class="thead-dark">
            <tr>
                <th class="col-1">ID</th>
                <th class="col-6">Name</th>
                <th class="col-3">Price</th>
                <th class="col-1">Warenkorb</th>
                <th class="col-1"></th>
            </tr>
            </thead>
            <tr v-for="item in warenkorbItems">
                <td> {{ item.ab_article_id }}</td>
                <td> {{ item.ab_name }}</td>
                <td> {{ item.ab_price }}</td>
                <td> {{ item.ab_shoppingcart_id }}</td>
                <td> <button v-on:click="removeWarenkorbItem(item.ab_article_id, item.ab_shoppingcart_id); getWarenkorb()" class="form-control">-</button> </td>
            </tr>
        </table>


    <table id="tabl" class="table table-striped">
        <thead class="thead-dark">
        <tr id="table_head">
            <th class="col"> id </th>
            <th class="col"> ab_name </th>
            <th class="col"> ab_price </th>
            <th class="col"> ab_description </th>
            <th class="col"> ab_creator_id </th>
            <th class="col"> ab_createdate </th>
            <th class="col"> picture </th>
            <th class="col"> add </th>
            <!--th class="col"> delete </th-->


        </tr>
        </thead>
        <template v-if="executed">
        <tr v-for="article in filteredArticles" class="buy_object">

            <td> {{ article.id }} </td>
            <td> {{ article.ab_name }} </td>
            <td> {{ article.ab_price }} </td>
            <td> {{ article.ab_description }} </td>
            <td> {{ article.ab_creator_id }} </td>
            <td> {{ article.ab_createdate }} </td>
            <td> <img class="rounded" v-bind:src="'articelpictures/' + article.bild" v-bind:alt="article.ab_name" > </td>

            <td> <button v-on:click="addWarenkorbItem(article.id); getWarenkorb()" class="form-control">+</button> </td>
        </tr>
        </template>
        <template v-else>
            <tr v-for="article in articles" class="buy_object">

                <td> {{ article.id }} </td>
                <td> {{ article.ab_name }} </td>
                <td> {{ article.ab_price }} </td>
                <td> {{ article.ab_description }} </td>
                <td> {{ article.ab_creator_id }} </td>
                <td> {{ article.ab_createdate }} </td>
                <td> <img class="rounded" v-bind:src="'articelpictures/' +article.bild" v-bind:alt="article.ab_name" > </td>

                <td> <button v-on:click="addWarenkorbItem(article.id); getWarenkorb()" class="form-control">+</button> </td>
            </tr>
        </template>


    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anask\OneDrive\Desktop\meines\Laravel\M5\resources\views/pages/articles.blade.php ENDPATH**/ ?>