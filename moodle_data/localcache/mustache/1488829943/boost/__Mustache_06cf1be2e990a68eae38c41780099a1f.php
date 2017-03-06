<?php

class __Mustache_06cf1be2e990a68eae38c41780099a1f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        // 'disabled' inverted section
        $value = $context->find('disabled');
        if (empty($value)) {
            
            $buffer .= $indent . '    <a href="';
            $value = $this->resolveValue($context->find('url'), $context);
            $buffer .= $value;
            $buffer .= '" id="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '" class="';
            $value = $this->resolveValue($context->find('classes'), $context);
            $buffer .= call_user_func($this->mustache->getEscape(), $value);
            $buffer .= '"';
            // 'attributes' section
            $value = $context->find('attributes');
            $buffer .= $this->sectionAdb5e780afc59025127d4eb34474e5b0($context, $indent, $value);
            $buffer .= '>';
            // 'icon' section
            $value = $context->find('icon');
            $buffer .= $this->sectionEe2a9d14486a71b1cfd3f2b94e61e140($context, $indent, $value);
            $value = $this->resolveValue($context->find('text'), $context);
            $buffer .= $value;
            $buffer .= '</a>
';
            // 'hasactions' section
            $value = $context->find('hasactions');
            $buffer .= $this->section193ac8288144ab8766a418c22811fbde($context, $indent, $value);
        }
        // 'disabled' section
        $value = $context->find('disabled');
        $buffer .= $this->section83941907d60dca42cadeb4e2d0dcec98($context, $indent, $value);

        return $buffer;
    }

    private function sectionE1aa2fd25fafc048534b66e7545a9f28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{value}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdb5e780afc59025127d4eb34474e5b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}={{#quote}}{{value}}{{/quote}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '=';
                // 'quote' section
                $value = $context->find('quote');
                $buffer .= $this->sectionE1aa2fd25fafc048534b66e7545a9f28($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe2a9d14486a71b1cfd3f2b94e61e140(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>core/pix_icon}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/pix_icon')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section193ac8288144ab8766a418c22811fbde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/actions }}
    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83941907d60dca42cadeb4e2d0dcec98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="currentlink {{classes}}"{{#attributes}} {{name}}={{#quote}}{{value}}{{/quote}}{{/attributes}}>{{#icon}}{{>core/pix_icon}}{{/icon}}{{{text}}}</span>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="currentlink ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '"';
                // 'attributes' section
                $value = $context->find('attributes');
                $buffer .= $this->sectionAdb5e780afc59025127d4eb34474e5b0($context, $indent, $value);
                $buffer .= '>';
                // 'icon' section
                $value = $context->find('icon');
                $buffer .= $this->sectionEe2a9d14486a71b1cfd3f2b94e61e140($context, $indent, $value);
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
