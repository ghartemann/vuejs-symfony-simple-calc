<script>
export default {
  data() {
    return {
      number1: 2,
      number2: 3,
      operator: '+',
    }
  },
  methods: {
    changeSymbol(operator) {
      switch (operator) {
        case "+":
          this.operator = "*";
          break;
        case "*":
          this.operator = "-";
          break;
        case "-":
          this.operator = "/";
          break;
        case "/":
          this.operator = "+";
          break;
      }
    }
  },
  computed: {
    resultAddition() {
      return this.number1 + this.number2;
    },
    resultMultiplication() {
      return this.number1 * this.number2;
    },
    resultSoustraction() {
      return this.number1 - this.number2;
    },
    resultDivision() {
      return this.number1 / this.number2;
    }
  }
};
</script>

<template>
  <div class="row justify-content-center mt-5">
    <div class="col-6 card shadow p-3">
      <h1 class="mb-4">Simple calc</h1>
      <form>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="input1" placeholder="Enter number 1" v-model.number="number1">
          <span class="input-group-text user-select-none" id="operator"
                @click="changeSymbol(operator)">{{ operator }}</span>
          <input type="text" class="form-control" id="input2" placeholder="Enter number 2" v-model.number="number2">
          <span class="input-group-text user-select-none" id="equals">=</span>

          <!-- horrendous block of code -->
          <input type="text" class="form-control bg-white" id="result" placeholder="Result" v-if="operator === '+'"
                 v-model.number="resultAddition" disabled readonly>
          <input type="text" class="form-control bg-white" id="result" placeholder="Result" v-if="operator === '*'"
                 v-model.number="resultMultiplication" disabled readonly>
          <input type="text" class="form-control bg-white" id="result" placeholder="Result" v-if="operator === '-'"
                 v-model.number="resultSoustraction" disabled readonly>
          <input type="text" class="form-control bg-white" id="result" placeholder="Result" v-if="operator === '/'"
                 v-model.number="resultDivision" disabled readonly>
        </div>
      </form>

    </div>
  </div>
</template>