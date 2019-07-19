<template>
  <div class="container">
    <h4 class="text-center">Input Your Scratch Card Details</h4>
    <form>
  <div class="form-group row">
    <label for="PinCode" class="col-sm-2 col-form-label">PinCode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" v-model="pin_code"
      @mouseout="verify()" placeholder="PinCode">
    </div>
  </div>
  <div class="form-group row">
    <label for="SerialNo" class="col-sm-2 col-form-label">SerialNo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" v-model="serial_no" placeholder="SerialNo">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary form-control header"
       v-bind:disabled="!isvalidForm">Register</button>
    </div>
  </div>
</form>
  </div>
</template>

<script>
export default {
  data(){
    return{
      serial_no:"",
      pin_code:""
    }
  },
  mounted(){

  },
  computed:{
    isvalidForm(){
      return this.serial_no
      && this.pin_code
    }
  },
  methods:{
    verify(){
      var pin_code= this.pin_code
      console.log(pin_code);
    }
  }
}
</script>

<style lang="css" scoped>
</style>
