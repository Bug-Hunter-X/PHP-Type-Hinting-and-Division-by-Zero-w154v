function foo(int $a, int $b): int {
  if ($b === 0) {
    return 0; // Or throw an exception: throw new InvalidArgumentException('Divisor cannot be zero');
  }
  return $a / $b; 
}