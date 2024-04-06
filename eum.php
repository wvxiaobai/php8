<?php
 
/**
 * Declare an enumeration.
 * It can also contain an optional 'string' or 'int' value. This is called backed Enum.
 * Backed enums (if used) should match the following criteria:
 * - Declare the scalar type, whether string or int, in the Enum declaration.
 * - All cases have values.
 * - All cases contain the same scalar type, whether string or int.
 * - Each case has a unique value.
 */
enum UserRole: string {
    case ADMIN    = '1';
    case GUEST    = '2';
    case WRITER   = '3';
    case EDITOR   = '4';
}
 
/**
 * You can access a case by using
 * the '::' scope resolution operator.
 * And, to get the name of the enum case, you
 * can use the '->' followed by the attribute 'name'.
 */
echo UserRole::WRITER->name.'---';
 
/**
 * To get the value of the enum case, you can
 * use the '->' followed by the attribute 'value'.
 */
echo UserRole::WRITER->value.'---';
 
?>