<?php
 
/**
 * Initialize the Fiber.
 */
$fiber = new Fiber(function(): void {
    /**
     * Print some message from inside the Fiber.
     * Before the Fiber gets suspended.
     */
    echo "Welcome to Fiber1!\n";
    /**
     * Suspend the Fiber.
     */
    Fiber::suspend();
    /**
     * Print some message from inside the Fiber.
     * After the Fiber gets resumed.
     */
    echo "Welcome back to Fiber1!\n";
});
 
/**
 * Print a message before starting a Fiber.
 */
echo "Starting a Fiber0\n";
/**
 * Start the Fiber.
 */
$fiber->start();
/**
 * Fiber has been suspened from the inside.
 * Print some message, and then resume the Fiber. * 来源公众号：码农编程进阶笔记 */
echo "Fiber has been suspended\n";
echo "Resuming the Fiber\n";
/**
 * Resume the Fiber.
 */
$fiber->resume();
/**
 * End of the example.
 */
echo "Fiber completed execution\n";
 
?>