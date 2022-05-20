<?php
function send_money(int $user_id_from, int $user_id_to, float $amount): bool {
    print("By admin's decision!");
    print("Log: send_to_user: $user_id_from -> $user_id_to [$amount]\n");
    print("Sending the money to user $user_id_to");
    return true;
}

if ($_ENV['is_admin'] ?? false) {
    send_money(42, 24, 100.42);
}
