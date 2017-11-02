<template>
  <div>
    <div class="row">
      <div class="message" :class="className">
        <p class="label label-default" style="font-weight:100;">{{ user }}</p>
        <br>
        <slot></slot>
        <br>
        <small class="pull-right" style="font-size:10px;">{{ time }}</small>
      </div>
    </div>
  </div>
</template>

<script>
    export default {
        props: [
          'kelas',
          'user',
          'time'
        ],
        computed: {
          className() {
            return 'message-'+this.kelas;
          }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
