<div class="container">
    <form action="<?= BASEURL?>/admin/update/" method="post">
    <div class="flex-col mt-3">
        <input type="hidden" value="<?= $data['content']['id']?>" name="id">
        <input type="text" placeholder="Input Name of Content" name="name" value="<?= $data['content']['name']?>">
        <textarea name="description" cols="30" rows="10" placeholder="Input Description of Content" class="mt-1"
        ><?= $data['content']['description']?></textarea>
        <input type="text" placeholder="Input Image URL" class="mt-1" name="img" value="<?= $data['content']['img']?>">
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