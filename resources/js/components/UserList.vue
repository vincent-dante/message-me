<template>
  <ul class="list-group">
    <li class="list-group-item" v-for="user in users" v-bind:key="user.id" v-on:click='fetchMessage(user)'>
      {{ user.name }}
    </li>
  </ul>
</template>

<script>
  export default {
    props: ['users'],
    methods: {
      fetchMessage(user){
        this.$parent.getMessages(user.id);
      }
    }
  };
</script>