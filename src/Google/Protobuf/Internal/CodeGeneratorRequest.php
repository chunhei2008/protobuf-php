<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/compiler/plugin.proto
namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\CodedInputStream as InputStream;
use Google\Protobuf\Internal\GPBUtil;
/**
 * An encoded CodeGeneratorRequest is written to the plugin's stdin.
 *
 * Generated from protobuf message <code>google.protobuf.compiler.CodeGeneratorRequest</code>
 */
class CodeGeneratorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The .proto files that were explicitly listed on the command-line.  The
     * code generator should generate code only for these files.  Each file's
     * descriptor will be included in proto_file, below.
     *
     * Generated from protobuf field <code>repeated string file_to_generate = 1;</code>
     */
    private $file_to_generate;
    private $has_file_to_generate = false;
    /**
     * The generator parameter passed on the command-line.
     *
     * Generated from protobuf field <code>optional string parameter = 2;</code>
     */
    private $parameter = '';
    private $has_parameter = false;
    /**
     * FileDescriptorProtos for all files in files_to_generate and everything
     * they import.  The files will appear in topological order, so each file
     * appears before any file that imports it.
     * protoc guarantees that all proto_files will be written after
     * the fields above, even though this is not technically guaranteed by the
     * protobuf wire format.  This theoretically could allow a plugin to stream
     * in the FileDescriptorProtos and handle them one by one rather than read
     * the entire set into memory at once.  However, as of this writing, this
     * is not similarly optimized on protoc's end -- it will store all fields in
     * memory at once before sending them to the plugin.
     * Type names of fields and extensions in the FileDescriptorProto are always
     * fully qualified.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.FileDescriptorProto proto_file = 15;</code>
     */
    private $proto_file;
    private $has_proto_file = false;
    /**
     * The version number of protocol compiler.
     *
     * Generated from protobuf field <code>optional .google.protobuf.compiler.Version compiler_version = 3;</code>
     */
    private $compiler_version = null;
    private $has_compiler_version = false;
    public function __construct() {
        \GPBMetadata\Google\Protobuf\Internal\Compiler\Plugin::initOnce();
        parent::__construct();
    }
    /**
     * The .proto files that were explicitly listed on the command-line.  The
     * code generator should generate code only for these files.  Each file's
     * descriptor will be included in proto_file, below.
     *
     * Generated from protobuf field <code>repeated string file_to_generate = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileToGenerate()
    {
        return $this->file_to_generate;
    }
    /**
     * The .proto files that were explicitly listed on the command-line.  The
     * code generator should generate code only for these files.  Each file's
     * descriptor will be included in proto_file, below.
     *
     * Generated from protobuf field <code>repeated string file_to_generate = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileToGenerate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->file_to_generate = $arr;
        $this->has_file_to_generate = true;
        return $this;
    }
    public function hasFileToGenerate()
    {
        return $this->has_file_to_generate;
    }
    /**
     * The generator parameter passed on the command-line.
     *
     * Generated from protobuf field <code>optional string parameter = 2;</code>
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }
    /**
     * The generator parameter passed on the command-line.
     *
     * Generated from protobuf field <code>optional string parameter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParameter($var)
    {
        GPBUtil::checkString($var, True);
        $this->parameter = $var;
        $this->has_parameter = true;
        return $this;
    }
    public function hasParameter()
    {
        return $this->has_parameter;
    }
    /**
     * FileDescriptorProtos for all files in files_to_generate and everything
     * they import.  The files will appear in topological order, so each file
     * appears before any file that imports it.
     * protoc guarantees that all proto_files will be written after
     * the fields above, even though this is not technically guaranteed by the
     * protobuf wire format.  This theoretically could allow a plugin to stream
     * in the FileDescriptorProtos and handle them one by one rather than read
     * the entire set into memory at once.  However, as of this writing, this
     * is not similarly optimized on protoc's end -- it will store all fields in
     * memory at once before sending them to the plugin.
     * Type names of fields and extensions in the FileDescriptorProto are always
     * fully qualified.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.FileDescriptorProto proto_file = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProtoFile()
    {
        return $this->proto_file;
    }
    /**
     * FileDescriptorProtos for all files in files_to_generate and everything
     * they import.  The files will appear in topological order, so each file
     * appears before any file that imports it.
     * protoc guarantees that all proto_files will be written after
     * the fields above, even though this is not technically guaranteed by the
     * protobuf wire format.  This theoretically could allow a plugin to stream
     * in the FileDescriptorProtos and handle them one by one rather than read
     * the entire set into memory at once.  However, as of this writing, this
     * is not similarly optimized on protoc's end -- it will store all fields in
     * memory at once before sending them to the plugin.
     * Type names of fields and extensions in the FileDescriptorProto are always
     * fully qualified.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.FileDescriptorProto proto_file = 15;</code>
     * @param \Google\Protobuf\Internal\FileDescriptorProto[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProtoFile($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\FileDescriptorProto::class);
        $this->proto_file = $arr;
        $this->has_proto_file = true;
        return $this;
    }
    public function hasProtoFile()
    {
        return $this->has_proto_file;
    }
    /**
     * The version number of protocol compiler.
     *
     * Generated from protobuf field <code>optional .google.protobuf.compiler.Version compiler_version = 3;</code>
     * @return \Google\Protobuf\Internal\Version
     */
    public function getCompilerVersion()
    {
        return $this->compiler_version;
    }
    /**
     * The version number of protocol compiler.
     *
     * Generated from protobuf field <code>optional .google.protobuf.compiler.Version compiler_version = 3;</code>
     * @param \Google\Protobuf\Internal\Version $var
     * @return $this
     */
    public function setCompilerVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Internal\Version::class);
        $this->compiler_version = $var;
        $this->has_compiler_version = true;
        return $this;
    }
    public function hasCompilerVersion()
    {
        return $this->has_compiler_version;
    }
}