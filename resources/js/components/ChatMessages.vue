<template>
  <div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item" v-for="msg in messages" v-bind:key="msg.id">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA_6ApafLprzpriMbdwireN03VbY--OTYcXg&usqp=CAU"
          class="img-fluid"
          style="width: 80px; border-radius: 50%"
        />
        {{ msg.message }}
      </li>      


<!--       <li class="list-group-item ">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA_6ApafLprzpriMbdwireN03VbY--OTYcXg&usqp=CAU"
          class="img-fluid"
          style="width: 80px; border-radius: 50%"
        />Hello
      </li>
      <li class="list-group-item text-right">
        Hi!
        <img
          src="https://www.pngitem.com/pimgs/m/192-1926160_transparent-ajax-png-anime-profile-png-download.png"
          class="img-fluid"
          style="width: 80px; border-radius: 50%"
        />
      </li>
      <li class="list-group-item ">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA_6ApafLprzpriMbdwireN03VbY--OTYcXg&usqp=CAU"
          class="img-fluid"
          style="width: 80px; border-radius: 50%"
        />
        How's your day?
      </li>
      <li class="list-group-item text-right">
        Good how about you?
        <img
          src="https://www.pngitem.com/pimgs/m/192-1926160_transparent-ajax-png-anime-profile-png-download.png"
          class="img-fluid"
          style="width: 80px; border-radius: 50%"
        />
      </li>
      <li class="list-group-item ">
        <img
          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA_6ApafLprzpriMbdwireN03VbY--OTYcXg&usqp=CAU"
          class="img-fluid"
          style="width: 80px; border-radius: 50%"
        />
        Also good :)
      </li> -->
    </ul>
  </div>
</template>

<script>
  export default {
    props: ['messages']
  };
</script>