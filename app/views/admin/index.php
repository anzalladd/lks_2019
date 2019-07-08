<div class="container">
    <div class="flex wrap">
       <?php foreach($data['contents'] as $content) :?>
       <div class="flex-xxl-3 flex-xl-3 flex-lg-3 flex-md-6 flex-s-12 mt-2">
        <div class="card flex align-center justify-between">
         <p><span class="mr-1"><a href="<?= BASEURL?>/admin/delete/<?= $content['id']?>">X</a></span><?= $content['name']?></p>
         <a href="<?= BASEURL?>/admin/edit/<?= $content['id']?>" class="mr-2 bold t16">Edit</a>
         </div>
       </div>
      <?php endforeach;?>
    </div>
    <form action="<?= BASEURL?>/admin/tambah" method="post">
    <div class="flex-col mt-3">
        <input type="text" placeholder="Input Name of Content" name="name">
        <textarea name="description" cols="30" rows="10" placeholder="Input Description of Content" class="mt-1"></textarea>
        <input type="text" placeholder="Input Image URL" class="mt-1" name="img">
        <button class="main-btn mt-1" type="submit">Submit</button>
    </div>
    </form>
</div>

<style scoped>
    .card{
        border: 1px solid black;
        margin-right: 25px;
        padding: 40px;
    }
    .card span a{
        color: red;
        font-weight: bold;
        cursor: pointer;
        font-size: 17px;
    }

    form input{
        padding: 15px;
    }

    form textarea{
        padding: 15px;
    }
</style>