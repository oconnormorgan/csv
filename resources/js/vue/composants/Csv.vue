<template>
  <div class="app">
    <v-file-input label="File input" @change="onFileChange"></v-file-input>
    <v-btn @click="upload">upload</v-btn>
  </div>
</template>

<script src='./Csv.js'>
</script>