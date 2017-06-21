<?php

namespace tlg\telegram\helpers;

use tlg\telegram\methods\keyboard\Keyboard;
use tlg\telegram\methods\keyboard\types\BTN;

class KeyboardHelpers
{
    public static function game()
    {
        return Keyboard::replyKeyboardMarkup([
            [BTN::new(SmileHelpers::TOP_LEFT), BTN::new(SmileHelpers::TOP), BTN::new(SmileHelpers::TOP_RIGHT)],
            [BTN::new(SmileHelpers::LEFT), BTN::new(SmileHelpers::AROUND), BTN::new(SmileHelpers::RIGHT)],
            [BTN::new(SmileHelpers::BOT_LEFT), BTN::new(SmileHelpers::BOT), BTN::new(SmileHelpers::BOT_RIGHT)],
            [BTN::new(SmileHelpers::DIRECT_HIT), BTN::new(SmileHelpers::BLOCK), BTN::new(SmileHelpers::BLINK)],
        ]);
    }

    public static function home()
    {
        return Keyboard::replyKeyboardMarkup([
            [BTN::new(SmileHelpers::SEARCH . ' Find a new game'), BTN::new(SmileHelpers::TRAINING . ' Training')],
            [BTN::new(SmileHelpers::I . ' I'), BTN::new(SmileHelpers::INFO . ' About the game')]
        ]);
    }

    public static function searchGame()
    {
        return Keyboard::replyKeyboardMarkup([
            [BTN::new(SmileHelpers::HOME . ' Return to main menu')],
            [BTN::new(SmileHelpers::SEARCH . ' Number of users in search')]
        ]);
    }

    public static function chooseGame()
    {
        return Keyboard::replyKeyboardMarkup([
            [BTN::new('Training')],
            [BTN::new('Bot 1x1'), BTN::new('Bot 2x2'), BTN::new('Bot 3x3')],
            [BTN::new('User 1x1'), BTN::new('User 2x2'), BTN::new('User 3x3')],
            [BTN::new(SmileHelpers::HOME . ' Return to main menu')]
        ]);
    }
}
