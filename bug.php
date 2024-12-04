function calculateSum(numbers) {
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
  }
  return sum;
}

const numbers = [1, 2, 3, 4, 5];
const sum = calculateSum(numbers);
console.log(sum); // Output: 15

// Bug: The function doesn't handle non-numeric values in the input array
const numbersWithNonNumeric = [1, 2, 'a', 4, 5];
const sumWithNonNumeric = calculateSum(numbersWithNonNumeric); 
console.log(sumWithNonNumeric); //Output: NaN. The expected output is 12.