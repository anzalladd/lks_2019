<div class="wrapper">

<!-- Header -->
  <div class="header">
    <div class="container text-center flex-col justify-center align-center">
    <h1><?= $data['nama']?></h1>
    <span class="typewriter">
    <h4 class="mt-1">I love you more than you know.</h4>
    </span>
    </div>
   </div>

<!-- Content -->
  <div class="content">
    <div class="container">
    <h1 class="mt-2 mb-2 text-center">My Content</h1>
    <div class="flex wrap">
      <?php foreach($data['contents'] as $content) :?>
      <div class="flex-xxl-3 flex-xl-3 flex-md-4 flex-s-6 isi-content">
        <img src="<?= $content['img']?>" style="width:100%">
          <div class="flex align-center justify-between">
            <h1><?= $content['name']?></h1>
            <a href="<?= BASEURL?>/home/detail/<?= $content['id']?>" class="mr-2 bold t16">Detail</a>
          </div>
        </div>
      <?php endforeach;?>
    </div>
    </div>
  </div>

</div>

<style scoped>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

.header{
  background-image: url(<?= BASEURL?>/assets/work.jpg);
  min-height: 500px;
  background-color: rgba(0,0,0, 0.7);
  background-blend-mode: darken;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.header h1,h4 {
  color: white;
}

.header h4{
  opacity: .7;
}

.header div{
  height: 500px;
}

.isi-content img{
  padding-right: 20px;
  height: 75%;
}

.isi-content a{
  color: var(--main-color);
}

.typewriter h4 {
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid var(--main-color); /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 3.5s steps(40, end),
    blink-caret .75s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: var(--main-color); }
}


</style>