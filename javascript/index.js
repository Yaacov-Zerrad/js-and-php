let total = 0;

function sum(x) {
  total += x;
  return total;
}

function sou(x) {
  total -= x;
  return total;
}

function mult(x) {
  if (total === 0) {
    return (total = x);
  } else {
    total *= x;
    return total;
  }
}

function div(x) {
  if (total === 0) {
    return (total = x);
  } else {
    total /= x;
    return total;
  }
}

function reset() {
  total = 0;
}
