<?php
function moyenne(array $notes): float {
if (count($notes) === 0) { return 0.0; } return round(array_sum($notes) / count($notes), 2);
}
