<?php

// 1. Calculate tax
function calculateTax(float $amount, float $taxRate): float
{
    return ($amount * $taxRate) / 100;
}

// 2. Format currency
function formatCurrency(
    float $amount,
    string $currencySymbol = '₦'
): string {
    return $currencySymbol . number_format($amount, 2);
}

// 3. Generate a URL-friendly slug
function generateSlug(string $text): string
{
    $slug = strtolower(trim($text));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);

    return trim($slug ?? '', '-');
}

// 4. Calculate age from date of birth
function calculateAge(string $dateOfBirth): int
{
    $birthDate = new DateTimeImmutable($dateOfBirth);
    $today = new DateTimeImmutable('today');

    if ($birthDate > $today) {
        throw new InvalidArgumentException(
            'Date of birth cannot be in the future.'
        );
    }

    return $birthDate->diff($today)->y;
}

// 5. Validate email format
function validateEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// 6. Paginate an array
function paginate(
    array $items,
    int $perPage,
    int $page
): array {
    if ($perPage < 1 || $page < 1) {
        throw new InvalidArgumentException(
            'Page and items per page must be greater than zero.'
        );
    }

    $offset = ($page - 1) * $perPage;

    return array_slice($items, $offset, $perPage);
}

// 7. Generate a reference code
function generateReference(): string
{
    return 'REF-' . strtoupper(bin2hex(random_bytes(4)));
}
