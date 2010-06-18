<?php
/**
 * Rudger Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Your Name <you@domain.net>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   SVN: $Id: coding-standard-tutorial.xml,v 1.9 2008-10-09 15:16:47 cweiske Exp $
 * @link      http://Rudger.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * Rudger Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Your Name <you@domain.net>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: @package_version@
 * @link      http://Rudger.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_Rudger_RudgerCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{

    public function getIncludedSniffs ()
    {
        return array(
            'Rudger/Sniffs/Commenting/BlockCommentSniff.php', 
            'Rudger/Sniffs/Commenting/ClassCommentSniff.php', 
            'Rudger/Sniffs/Commenting/ClosingDeclarationCommentSniff.php', 
            'Rudger/Sniffs/Commenting/DocCommentAlignmentSniff.php', 
            'Rudger/Sniffs/Commenting/EmptyCatchCommentSniff.php', 
            'Rudger/Sniffs/Commenting/FileCommentSniff.php', 
            'Rudger/Sniffs/Commenting/FunctionCommentSniff.php', 
            'Rudger/Sniffs/Commenting/FunctionCommentThrowTagSniff.php', 
            'Rudger/Sniffs/Commenting/InlineCommentSniff.php', 
            'Rudger/Sniffs/Commenting/LongConditionClosingCommentSniff.php', 
            'Rudger/Sniffs/Commenting/PostStatementCommentSniff.php', 
            'Rudger/Sniffs/Commenting/VariableCommentSniff.php'
        );
    
    }
}


//            'Rudger/Sniffs/CodeAnalysis/EmptyStatementSniff.php', 
//            'Rudger/Sniffs/CodeAnalysis/ForLoopShouldBeWhileLoopSniff.php', 
//            'Rudger/Sniffs/CodeAnalysis/ForLoopWithTestFunctionCallSniff.php', 
//            'Rudger/Sniffs/CodeAnalysis/JumbledIncrementerSniff.php', 
//            'Rudger/Sniffs/CodeAnalysis/UnconditionalIfStatementSniff.php', 
//            'Rudger/Sniffs/CodeAnalysis/UnnecessaryFinalModifierSniff.php', 
//            'Rudger/Sniffs/CodeAnalysis/UselessOverridingMethodSniff.php', 
//            
//            
//            'Rudger/Sniffs/ControlStructures/InlineControlStructureSniff.php', 
//            
//            'Rudger/Sniffs/Files/LineEndingsSniff.php', 
//            
//            'Rudger/Sniffs/Formatting/DisallowMultipleStatementsSniff.php', 
//            'Rudger/Sniffs/Formatting/MultipleStatementAlignmentSniff.php', 
//            'Rudger/Sniffs/Formatting/NoSpaceAfterCastSniff.php', 
//            
//            'Rudger/Sniffs/Functions/OpeningFunctionBraceBsdAllmanSniff.php', 
//            'Rudger/Sniffs/Functions/ValidDefaultValueSniff.php', 
//            
//            'Rudger/Sniffs/NamingConventions/ConstructorNameSniff.php', 
//            'Rudger/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php', 
//            'Rudger/Sniffs/NamingConventions/ValidClassNameSniff.php', 
//            
//            'Rudger/Sniffs/PHP/DisallowShortOpenTagSniff.php', 
//            'Rudger/Sniffs/PHP/NoSilencedErrorsSniff.php', 
//            'Rudger/Sniffs/PHP/UpperCaseConstantSniff.php', 
//            
//            'Rudger/Sniffs/WhiteSpace/DisallowTabIndentSniff.php', 
//            'Rudger/Sniffs/WhiteSpace/ScopeIndentSniff.php', 
//            'Rudger/Sniffs/WhiteSpace/SuperfluousWhitespaceSniff.php'
