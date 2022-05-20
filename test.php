<?php
function send_money(int $user_id_from, int $user_id_to, float $amount): bool {
    print("Sending the money to user $user_id_to");
    return true;
}

send_money(42, 24, 100.42);
