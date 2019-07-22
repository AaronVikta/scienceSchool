<template>
  <div class="container">
    <h4 class="text-center">Input Your Scratch Card Pin Code</h4>
    <form v-on:submit.prevent>
  <div class="form-group row">
    <div class="container">
      <span class="text-danger text-center">{{errormsg}}</span>
      <span class="text-success text-center">{{msg}}</span>
    </div>
    <label for="PinCode" class="col-sm-2 col-form-label">PinCode</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" v-model="pin_code"
      v-on:keyup.enter="verify()" placeholder="PinCode">
    </div>
  </div>
</form>
<form v-on:submit.prevent>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10" v-if="showForm">

        <h5 class="text-center">Basic Details</h5>
        <div class="form-row">
        <div class="col mb-1">
          <input type="text" class="form-control" v-model="fullname" placeholder="Surname  Firstname">
        </div>
        <div class="col mb-1">
          <input type="text" class="form-control" placeholder="Sex" v-model="sex">
        </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control" placeholder="Address" v-model="address">
      </div>
    </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="number" class="form-control" placeholder="Age" v-model="age">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control"
         placeholder="Last Secondary School Attended" v-model="last_school">
      </div>
    </div>
    <div class="form-row">
    <div class="col mb-1">
      <input type="text" class="form-control" v-model="basic_cert_no"
      placeholder="Basic Education Certificate Examination Number">
    </div>
    <div class="col mb-1">
      <input type="text" class="form-control" v-model="school_of_choice"
      placeholder="Choice of School">
    </div>
  </div>
  <div class="form-row">
  <div class="col mb-1">
    <input type="text" class="form-control" v-model="lga"
    placeholder="L.G.A">
  </div>
  <div class="col mb-1">
    <input type="text" class="form-control" v-model="state"
     placeholder="State">
  </div>
  </div>
    <h6 class="text-center">Subjects and Grades</h6>
          <div class="form-row">
          <div class="col mb-1">
            <input type="text" class="form-control"
            v-model="sub1" placeholder="Subject 1">
          </div>
          <div class="col mb-1">
            <input type="text" class="form-control"v-model="grad1" placeholder="Grade">
          </div>
        </div>
        <div class="form-row">
        <div class="col mb-1">
          <input type="text" class="form-control"
          v-model="sub2" placeholder="Subject 2">
        </div>
        <div class="col mb-1">
          <input type="text" class="form-control" v-model="grad2"
           placeholder="Grade">
        </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control"
        v-model="sub3" placeholder="Subject 3">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="grad3" placeholder="Grade">
      </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="sub4" placeholder="Subject 4 ">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="grad4" placeholder="Grade">
      </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="sub5"
        placeholder="Subject 5">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="grad5"
         placeholder="Grade">
      </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="sub6"
        placeholder="Subject 6">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="grad6"
        placeholder="Grade">
      </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="sub7"
        placeholder="Subject 7">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="grad7"
         placeholder="Grade">
      </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control"
        v-model="sub8" placeholder="Subject 8">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="grad8"
         placeholder="Grade">
      </div>
      </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="sub9"
         placeholder="Subject 9">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control" v-model="grad9"
        placeholder="Grade">
      </div>
    </div>
      <div class="form-row">
      <div class="col mb-1">
        <input type="text" class="form-control"
      v-model="sub10"  placeholder="Subject 10">
      </div>
      <div class="col mb-1">
        <input type="text" class="form-control"
        v-model="grad10" placeholder="Grade">
      </div>
      </div>
    <h6 class="text-center">Centers for Exam</h6>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control mt-1" disabled
            placeholder="UMUAHIA ZONE : World Bank Housing Estate primary School, Umuahia">
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control mt-1" disabled placeholder="
            OHAFIA ZONE : Senior Science School, Alayi.">
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control mt-1" disabled placeholder="
            ABA ZONE : Senior Science School Owerrinta, Isiala Ngwa South">
        </div>
      </div>
      <div class="form-row">
        <div class="col mt-1">
          <input type="text" v-model="choice_of_center" placeholder="Choice of Center" class="form-control">
        </div>
      </div>
      <div class="form-row">
        <div class="col mt-1">
          <input type="text" class="form-control" v-model="pin"
           placeholder="Retype Your PinCode">
        </div>
      </div>
      <div class="form-row">
        <div class="col mt-1">
          <input type="text" class="form-control" v-model="parent"
           placeholder="Name of Parent">
        </div>
      </div>
      <p class="text-center mt-1">Subject for Examination:
        English,Mathematics, and Basic Science/Technology.</p>
      <div class="form-row">
        <div class="col">
          <input type="text" disabled class="text-center form-control mb-1 remove"
           placeholder="7th August 2019">
        </div>
      </div>
      <button type="submit" class="btn btn-primary form-control header"
       v-bind:disabled="!isvalidForm" @click="submitForm()">Register</button>
    </div>
  </div>
</form>
  </div>
</template>

<script>
export default {
  data(){
    return{
      pin_code:"",
      showForm:false,
      msg:"",
      errormsg:"",
      fullname:"",
      sex:"",
      age:"",
      address:"",
      lga:"",
      state:"",
      last_school:"",
      basic_cert_no:"",
      sub1:"",
      sub2:"",
      sub3:"",
      sub4:"",
      sub5:"",
      sub6:"",
      sub7:"",
      sub8:"",
      sub9:"",
      sub10:"",
      grad1:"",
      grad2:"",
      grad3:"",
      grad4:"",
      grad5:"",
      grad6:"",
      grad7:"",
      grad8:"",
      grad9:"",
      grad10:"",
      school_of_choice:"",
      choice_of_center:"",
      pin:"",
      user:"",
      parent:"",
    }
  },
  mounted(){
console.log(this.$userId)
  },
  computed:{
    isvalidForm(){
      return this.choice_of_center && this.school_of_choice&&this.fullname
      &&this.basic_cert_no&&this.pin
    }
  },
  methods:{
    verify(){
      var pin_code= this.pin_code
      let url =`api/pins/${pin_code}`
      fetch(url)
      .then(response=>response.json())
      .then(response=>{

        this.showForm = "true"
      })
      .catch(err =>console.log(err))
    },
    updatePin(){
      let user =this.fullname
      let url = `api/newform`
      axios.post(url,{
        pin:this.pin,
        user:user
      })
      .then(
        response=>{
          if(response.status ==200){
            this.msg="Successfully registered"
          }
          else{
            this.errormsg="Failed to Register"
          }
        })
    },
    submitForm(){
      let user= this.$userId
      let url =`api/form`
      axios.post(`api/form`,{
        fullname:this.fullname,
        sex:this.sex,
        age:this.age,
        address:this.address,
        lga:this.lga,
        state:this.state,
        last_school:this.last_school,
        basic_cert_no:this.basic_cert_no,
        school_of_choice:this.school_of_choice,
        choice_of_center:this.choice_of_center,
        parent:this.parent,
        sub1:this.sub1,
        sub2:this.sub2,
        sub3:this.sub3,
        sub4:this.sub4,
        sub5:this.sub5,
        sub6:this.sub6,
        sub7:this.sub7,
        sub9:this.sub9,
        sub10:this.sub10,
        grad1:this.grad1,
        grad2:this.grad2,
        grad3:this.grad3,
        grad4:this.grad4,
        grad5:this.grad5,
        grad6:this.grad6,
        grad7:this.grad7,
        grad8:this.grad8,
        grad9:this.grad9,
        grad10:this.grad10,
        pin:this.pin,
        parent:this.parent,
        user:user
      })
      .then(response=>{
        this.updatePin()
      }).catch(err=>{
        console.log(failed)
      })
    }
  }
}
</script>

<style lang="css" scoped>
.form-control{
  border-radius:0px;
}
.remove{
  border:none;
}
</style>
